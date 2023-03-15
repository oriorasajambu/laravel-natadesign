<?php

use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/portofolio', 'portofolio');
    Route::get('/portofolio/{album}', 'portofolioDetail');
    Route::get('/articles', 'articles');
    Route::get('/articles/{post}', 'articleDetail');
    Route::get('/media', 'media');
    Route::get('/media/{post}', 'mediaDetail');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/information', 'information');
});

Route::controller(EmailController::class)->group(function () {
    Route::post('/send-contact', 'contactForm')->name('send.contact');
    Route::post('/inquiry-price', 'inquiryForm')->name('inquiry.price');
});
