<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getCount(){
        $alumni = User::where('role', '=' , 'User')->count();
        $news =News::count();

        return view('admin.dashboard',compact('alumni', 'news'));
    }

}
