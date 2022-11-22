<?php

namespace App\Http\Controllers\Profile\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function alumni (){
       
    $alumni = User::where('role', '=' , 'User')->orderBy('batch')->paginate(6);
    return view('front.alumni', compact('alumni'));     

    }

    public function alumni_detail($id){

        $alumni_detail = User::where('id', $id)->first();
        return view ('front.alumni-detail', compact('alumni_detail'));
    }

    public function searchBybatch(Request $request){

    
    //    $validated= $request->validate([
    //         'search' =>'numeric'
    //    ]);

        $search = $request->input('search');
        
        $alumni= User::query()->where('first_name', 'LIKE', "%{$search}%" )
                            ->orWhere('batch','LIKE',"%{$search}%" )
                            ->orWhere('city','LIKE',"%{$search}%")->orderBy('first_name')->paginate(6);
        //$alumni = User::where('batch', 'LIKE', $validated)->orderBy('first_name')->paginate(6);

        return view('front.alumni-search', compact('alumni'));
       

    }
}
