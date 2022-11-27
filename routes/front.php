<?php

use App\Http\Controllers\News\Front\NewsController;
use App\Http\Controllers\Profile\Front\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.landing');
})->name('landing');

//Alumni
Route::get('/alumni',[ProfileController::class, 'alumni'] )->name('alumni');
Route::get('/alumni-detail/{id}',[ProfileController::class,'alumni_detail'])->name('alumni-detail');

//search
Route::get('/search',[ProfileController::class,'searchByBatch'])->name('alumni-search');

//News
Route::get('/newslist',[NewsController::class, 'news_list'] )->name('front.news');
Route::get('/news-detail/{id}',[NewsController::class,'news_detail'])->name('news-detail');


