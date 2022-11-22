<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.landing');
})->name('landing');
