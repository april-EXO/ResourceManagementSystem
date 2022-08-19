<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Profile;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function viewProfile(){
        $user_id = Auth::user()->id;
        $userProfile=User_Profile::where('user_id',$user_id)
        ->get();
        
        return view("profile",[ 'userProfile'=>$userProfile ]);
    }
}