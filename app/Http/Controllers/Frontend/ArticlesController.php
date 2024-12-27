<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;

class ArticlesController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $articles = Article::with(['category', 'publish_comments'])->orderBy('created_at', 'DESC')->where('status', 'PUBLISH')->paginate(6);
        $latest = Article::with(['category', 'publish_comments'])->orderBy('created_at', 'DESC')->where('status', 'PUBLISH')->paginate(3);
        return view('frontend.pages.articles.index', compact('articles', 'latest', 'contact'));
    }

    public function article()
    {
        $contact = Contact::first();
        $articles = Article::with(['category', 'publish_comments'])
                            ->orderBy('created_at', 'DESC')
                            ->where('status', 'PUBLISH');

        if (request()->q != '') {
            $articles->where('title', 'LIKE', '%' . request()->q . '%');
        }

        $articles = $articles->paginate(10);

        Paginator::useBootstrap();

        return view('frontend.pages.articles.index', compact('articles', 'contact'));
    }

    public function categoryArticle($slug)
    {
        $contact = Contact::first();

        if (Category::whereSlug($slug)->exists()){
            $articles = Category::where('slug', $slug)->first()->article()->with(['category', 'publish_comments'])->orderBy('created_at', 'DESC')->where('status', 'PUBLISH')->paginate(8);
            return view('frontend.pages.articles.index', compact('articles', 'contact'));
        }else{
            return redirect()->back();
       }
    }
    
    public function show($slug)
    {
        $contact = Contact::first();
        $article = Article::where('slug', $slug)->first();
    
        if ($article) {
            $article->increment('views');
            $article = Article::with(['category', 'publish_comments', 'publish_comments.publish_child'])
                ->where('slug', $slug)
                ->first();
    
            // Mendapatkan posting sebelumnya
            $prev = Article::where('id', '<', $article->id)
                ->where('status', 'PUBLISH')
                ->orderBy('id', 'desc')
                ->first();
    
            // Mendapatkan posting berikutnya
            $next = Article::where('id', '>', $article->id)
                ->where('status', 'PUBLISH')
                ->orderBy('id')
                ->first();
    
            return view('frontend.pages.articles.detail', compact('article', 'prev', 'next', 'contact'));
        } else {
            return redirect()->back();
        }
    }
    
    public function comment(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:50',
            'email' => 'required|max:50',
            'comment' => 'required|max:500'
        ]);

        Comment::create([
            'article_id' => $request->id,
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'username' => $request->username,
            'email' => $request->email,
            'comment' => $request->comment,
            'status' => 'DRAFT'
        ]);
        
        return redirect()->back()->with(['success' => 'Comment successfully added and will be displayed if approved']);;
    }
}