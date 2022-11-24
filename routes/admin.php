<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'getCount'] )->middleware(['auth', 'verified','admin'])->name('dashboard');
Route::get('/user', [AdminController::class, 'getCount'] )->middleware(['auth', 'verified','admin'])->name('admin.alumni');

