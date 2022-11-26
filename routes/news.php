<?php

use App\Http\Controllers\News\Back\NewsController;
use Illuminate\Support\Facades\Route;


Route::resource('news', NewsController::class)->middleware(['auth', 'verified', 'admin']);


