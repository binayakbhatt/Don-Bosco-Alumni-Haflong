<?php

use App\Http\Controllers\User\RegisteredUserController;

use Illuminate\Support\Facades\Route;



Route::get('/users', [RegisteredUserController::class, 'index'])->middleware(['auth', 'verified','admin'])->name('user.index');
Route::get('/users/search', [RegisteredUserController::class, 'search'])->middleware(['auth', 'verified','admin'])->name('user.search');
