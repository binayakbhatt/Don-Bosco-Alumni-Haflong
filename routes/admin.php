<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [AdminController::class, 'getCount'] )->middleware(['auth', 'verified','admin'])->name('dashboard');

