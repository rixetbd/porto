<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// FrontEnd Route
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('frontend.home');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/portfolio', 'portfolio')->name('frontend.portfolio');
    Route::get('/portfolio/single-view/{id}', 'portfolioView')->name('frontend.portfolio.portfolio_single');
    Route::post('/portfolio/single-view/comment', 'portfolioComment')->name('frontend.portfolio.comments');
    Route::get('/contact', 'contactPage')->name('frontend.contact');
    Route::get('/blog', 'blogPage')->name('frontend.blog');
    Route::get('/blog-post/{id}', 'blogSingle')->name('frontend.blog_post');
    Route::post('/blog-post/comments', 'blogComment')->name('frontend.blog.comments');
});

Route::post('/clients/email', [MailController::class,'mail_post'])->name('frontend.mail');
