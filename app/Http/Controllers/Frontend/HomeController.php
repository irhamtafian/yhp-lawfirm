<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Visitor;
use App\Models\Contact;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class HomeController extends Controller
{
     public function index()
    {
        $contact = Contact::first();
        $today = Carbon::today();

        $visitor = Visitor::where('visit_date', $today)->first();

        if ($visitor) {
            $visitor->increment('count');
        } else {
            Visitor::create(['visit_date' => $today, 'count' => 1]);
        }

        $homeData1 = Home::find(1);
        $homeData2 = Home::find(2);
        $homeData3 = Home::find(3);
        $homeData4 = Home::find(4);
        $homeData5 = Home::find(5);
        $homeData6 = Home::find(6);

        return view('frontend.pages.home', compact('homeData1', 'homeData2', 'homeData3', 'homeData4', 'homeData5', 'homeData6', 'contact'));
    }
   
}