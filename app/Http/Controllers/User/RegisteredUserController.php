<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
     public function index()
    {
        $users = User::where('role', '=', 'User')->latest()->paginate(10);
        return view('user.index', compact('users'));
    }

    public function search(Request $request)
    {
         $search = $request->input('search');
         $users = User::search($search)->paginate(10);

        return view('user.index', compact('users'));
    }

    public function delete($id){

        $user = User::findorFail($id);
        $user->delete();
        return back();
    }
}
