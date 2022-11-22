<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\Back\ProfileController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
require __DIR__.'/front.php';
