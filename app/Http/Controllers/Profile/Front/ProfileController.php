<?php

namespace App\Http\Controllers\Profile\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function Alumni (){
       $alumni = User::where('role', '=' , 'User')->orderBy('batch')->paginate(10);
           
    }
}
