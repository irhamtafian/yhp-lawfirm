<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controller Backend

use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\AdminArticlesController;
use App\Http\Controllers\Backend\AdminArticleCategoriesController;
use App\Http\Controllers\Backend\AdminArticleCommentsController;
use App\Http\Controllers\Backend\MailController;
use App\Http\Controllers\Backend\AdminHomeController;
use App\Http\Controllers\Backend\AdminMailsController;
use App\Http\Controllers\Backend\AdminAboutUsController;
use App\Http\Controllers\Backend\AdminServicesController;
use App\Http\Controllers\Backend\AdminPartnersController;
use App\Http\Controllers\Backend\AdminOurClientsController;
use App\Http\Controllers\Backend\AdminContactController;
use App\Http\Controllers\Backend\AdminSearchController;

use App\Http\Controllers\Backend\BlankController;

// Controller Frontend

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ArticlesController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\PartnersController;
use App\Http\Controllers\Frontend\OurClientsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SearchController;

// Route Redirect to Auth Pages

Route::get('/login', function () {return redirect('/admin/login');});
Route::get('/admin', function () {return redirect('/admin/login');});

// Route Backend

Route::prefix('admin')->group(function () {
    Route::get('/pisanggoreng', [AdminAuthController::class, 'register'])->middleware('guest');
    Route::post('/pisanggoreng', [AdminAuthController::class, 'store_register']);
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [AdminAuthController::class, 'authenticate']);
    Route::post('/logout', [AdminAuthController::class, 'logout']);
    Route::post('/articles/logout', [AdminAuthController::class, 'logout']);
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('/articles', AdminArticlesController::class)->except(['show']);
        Route::resource('/articles/categories', AdminArticleCategoriesController::class)->except(['create', 'show']);
        Route::get('/articles/comments', [AdminArticleCommentsController::class, 'index'])->name('comments.index');
        Route::put('/articles/comments/{id}/publish', [AdminArticleCommentsController::class, 'publish'])->name('comments.publish');
        Route::delete('/articles/comments/{id}/delete', [AdminArticleCommentsController::class, 'delete'])->name('comments.delete');
        Route::get('/mails', [MailController::class, 'index']);
        Route::delete('/mails/{id}', [ContactController::class, 'delete'])->name('contact.delete');
        Route::resource('/mails', AdminMailsController::class)->only(['index', 'destroy']);
        Route::delete('/mails/{id}', [AdminMailsController::class, 'destroy'])->name('mails.delete');
        Route::get('/about-us', [AdminAboutUsController::class, 'index'])->name('about-us.index');
        Route::get('/about-us/edit/{id}', [AdminAboutUsController::class, 'edit'])->name('about-us.edit');
        Route::put('/about-us/update/{id}', [AdminAboutUsController::class, 'update'])->name('about-us.update');
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home.index');
        Route::get('/home/edit/{id}', [AdminHomeController::class, 'edit'])->name('home.edit');
        Route::put('/home/update/{id}', [AdminHomeController::class, 'update'])->name('home.update');
        Route::get('/services', [AdminServicesController::class, 'index'])->name('services.index');
        Route::get('/services/edit/{id}', [AdminServicesController::class, 'edit'])->name('services.edit');
        Route::put('/services/update/{id}', [AdminServicesController::class, 'update'])->name('services.update');
        Route::get('/partners', [AdminPartnersController::class, 'index'])->name('partners.index');
        Route::get('/partners/edit/{id}', [AdminPartnersController::class, 'edit'])->name('partners.edit');
        Route::put('/partners/update/{id}', [AdminPartnersController::class, 'update'])->name('partners.update');
        Route::get('/our-clients', [AdminOurClientsController::class, 'index'])->name('our-clients.index');
        Route::get('/our-clients/edit/{id}', [AdminOurClientsController::class, 'edit'])->name('our-clients.edit');
        Route::put('/our-clients/update/{id}', [AdminOurClientsController::class, 'update'])->name('our-clients.update');
        Route::get('/contact', [AdminContactController::class, 'index'])->name('contact.index');
        Route::post('/contact/update', [AdminContactController::class, 'update'])->name('contact.update');
        Route::get('/search', [AdminSearchController::class, 'index'])->name('backend.search.index');
    });
});

// Route Frontend
Route::get('/', [HomeController::class, 'index'])->name('front.home.index');
Route::get('/home', function () {return redirect('/');});
Route::get('/beranda', function () {return redirect('/');});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('front.about-us.index');
Route::get('/services', [ServicesController::class, 'index'])->name('front.services.index');
Route::get('/partners', [PartnersController::class, 'index'])->name('front.partners.index');
Route::get('/our-clients', [OurClientsController::class, 'index'])->name('front.our-clients.index');
Route::get('/contact', [ContactController::class, 'index'])->name('front.contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/articles', [ArticlesController::class, 'index'])->name('front.articles.index');
Route::get('/articles', [ArticlesController::class, 'article'])->name('front.article');
Route::get('/articles/category/{slug}', [ArticlesController::class, 'categoryArticle'])->name('front.category');
Route::get('/articles/{slug}', [ArticlesController::class, 'show'])->name('front.show_article');
Route::post('/comment', [ArticlesController::class, 'comment']);

Route::get('/search', [SearchController::class, 'index'])->name('frontend.search.index');

Route::get('/blank', [BlankController::class, 'index']);
// Route::post('/blank', [BlankController::class, 'index']);