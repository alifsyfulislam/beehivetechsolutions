<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

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


Route::get('/',[PageController::class,'index'])->name('/');

Route::get('/banner/{slug}', [PageController::class,'bannerViewController'])->name('banner.by.slug');
Route::get('/banner-list', [PageController::class,'bannerListController'])->name('banner-list');

Route::get('/about-us',[PageController::class,'aboutUsViewController'])->name('about-us');

Route::get('/service/{slug}', [PageController::class,'serviceViewController'])->name('service.by.slug');
Route::get('/service-list',     [PageController::class,'serviceListController'])->name('service-list');

Route::get('/news-list', [PageController::class,'newsListController'])->name('news-list');
Route::get('/news/{slug}', [PageController::class,'newsViewController'])->name('news.by.slug');

Route::get('/faqs', [PageController::class,'faqsViewController'])->name('faqs');
Route::get('/contact-us', [PageController::class,'contactViewController'])->name('contact-us');

Route::post('/send-message', [ContactController::class, 'store'])->name('send-message');

