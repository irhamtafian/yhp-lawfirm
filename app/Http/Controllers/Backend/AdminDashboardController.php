<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Visitor;
use Illuminate\Support\Carbon;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        // $generalCount = Contact::where('f_subject', 'General')->count();
        // $projectReviewCount = Contact::where('f_subject', 'Project Review')->count();
        // $hireMeCount = Contact::where('f_subject', 'Hire Me')->count();

        $visitorData = Visitor::where('visit_date', '>=', now()->subDays(29))
        ->orderBy('visit_date')
        ->pluck('count')
        ->toArray();

        while (count($visitorData) < 30) {
            array_unshift($visitorData, 0);
        }

        $totalVisitor = array_sum($visitorData);
  
        $filter = $request->input('filter', 'daily');

        $visitors = $this->getVisitorsByFilter($filter);

        $articles = Article::all();
        $categories = Category::all();
        $comments = Comment::all();
        $contacts = Contact::all();
        $visitorCount = Visitor::sum('count');
        return view('backend.modules.dashboard.index', compact('visitorData', 'totalVisitor','articles', 'categories', 'comments', 'contacts', 'visitors', 'filter', ));
    }
   
    private function getVisitorsByFilter($filter)
    {
        if ($filter === 'daily' || $filter === 'most-daily' || $filter === 'least-daily') {
            $visitors = Visitor::whereDate('visit_date', '>=', now()->subDays(13))->orderByDesc('visit_date')->get();
            $visitorsGrouped = $visitors->groupBy(function ($date) {
                return Carbon::parse($date->visit_date)->format('l d M Y');
            });
    
            if ($filter === 'most-daily') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $b->sum('count') - $a->sum('count');
                });
            } elseif ($filter === 'least-daily') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $a->sum('count') - $b->sum('count');
                });
            }

        } elseif ($filter === 'weekly' || $filter === 'most-weekly' || $filter === 'least-weekly') {
            $visitors = Visitor::whereDate('visit_date', '>=', now()->subMonths(1))->orderBy('visit_date')->get();
            $visitorsGrouped = $visitors->groupBy(function ($date) {
                $weekInMonth = Carbon::parse($date->visit_date)->weekOfMonth;
                return "Week $weekInMonth";
            });

            if ($filter === 'weekly') {
                $currentWeek = "Week " . now()->weekOfMonth;
                $visitorsGrouped = $visitorsGrouped->sortKeysDesc();
            } elseif ($filter === 'most-weekly') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $b->sum('count') - $a->sum('count');
                });
            } elseif ($filter === 'least-weekly') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $a->sum('count') - $b->sum('count');
                });
            }

        } elseif ($filter === 'monthly' || $filter === 'most-monthly' || $filter === 'least-monthly') {
            $visitors = Visitor::whereDate('visit_date', '>=', now()->subYear())->orderBy('visit_date')->get();
            $visitorsGrouped = $visitors->groupBy(function ($date) {
                return Carbon::parse($date->visit_date)->format('F Y');
            });
        
            if ($filter === 'monthly') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $b->sum('count') - $a->sum('count');
                });
            } elseif ($filter === 'most-monthly') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $b->sum('count') - $a->sum('count');
                });
            } elseif ($filter === 'least-monthly') {
                $visitorsGrouped = $visitorsGrouped->sort(function ($a, $b) {
                    return $a->sum('count') - $b->sum('count');
                });
            }
        
        } else {
            $visitors = Visitor::whereDate('visit_date', '>=', now()->subMonth())->orderBy('visit_date')->get();
            $visitorsGrouped = $visitors->groupBy(function ($date) {
                return Carbon::parse($date->visit_date)->format('l d M Y');
            });
        }
    
        return $visitorsGrouped;
    }
}