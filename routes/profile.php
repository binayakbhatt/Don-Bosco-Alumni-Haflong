<?php

use App\Http\Controllers\Profile\Back\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth','verified']], function(){
   //profile
  Route::get('/profile',[ProfileController::class, 'viewProfile'] )->name('profile.view');
  Route::get('/profile/edit',[ProfileController::class, 'editProfile'] )->name('profile.edit');
  Route::put('/profile/update',[ProfileController::class, 'updateProfile'] )->name('profile.update');
  
  //profile pic
  Route::put('/profile-pic',[ProfileController::class, 'updateProfilePic'] )->name('profile-pic.update');
  Route::put('/remove-pic',[ProfileController::class, 'removeProfilePic'] )->name('remove-pic');

  //change password
  Route::get('/change-password',[ProfileController::class, 'editPassword'])->name('edit.password');
  Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
  
  //change passphrase
  Route::get('/change-passphrase',[ProfileController::class, 'editPassphrase'])->name('edit.passphrase');
  Route::post('/change-passphrase',[ProfileController::class, 'changePassphrase'])->name('change.passphrase');

});