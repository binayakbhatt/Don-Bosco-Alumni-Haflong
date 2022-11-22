<?php

namespace App\Http\Controllers\Profile\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function alumni (){
       
    $alumni = User::where('role', '=' , 'User')->orderBy('batch')->paginate(10);
    return view('front.alumni', compact('alumni'));     
    
    }

    public function alumni_detail($id){

        $alumni_detail = User::where('id', $id)->first();
        return view ('front.alumni-detail', compact('alumni_detail'));
    }
}
