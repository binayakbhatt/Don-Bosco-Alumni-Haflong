<?php

use App\Http\Controllers\Profile\Front\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.landing');
})->name('landing');

//Alumni
Route::get('/alumni',[ProfileController::class, 'alumni'] )->name('alumni');
Route::get('/alumni-detail/{id}',[ProfileController::class,'alumni_detail'])->name('alumni-detail');

