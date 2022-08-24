<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Profile;
use App\Models\Approved;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function viewProfile(){
        $user_id = Auth::user()->id;
        $userProfile=User_Profile::where('user_id',$user_id)
        ->get();
        
        return view("profile",[ 'userProfile'=>$userProfile ]);
    }

    function beneficiaryProfile(){
        $user_id = Auth::user()->id;
        $beneficiary=Approved::with( relations: 'getResourcesRelation') 
        ->where('user_id',$user_id)
        ->get();
        
        return view("beneficiaryProfile",[ 'beneficiary'=>$beneficiary ]);
    }
}