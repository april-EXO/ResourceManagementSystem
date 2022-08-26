<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Profile;
use App\Models\DonationRecord;
use App\Models\Approved;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function viewProfile(){
        $user_id = Auth::user()->id;
        $userProfile=User_Profile::where('user_id',$user_id)
        ->get();
        $donationRecord=DonationRecord::join('beneficiaries', 'beneficiaries.id', '=', 'donation_records.beneficiary_id')
        ->where('donation_records.user_id', $user_id)
        ->select('beneficiaries.description', 'donation_records.*')
        ->get();

       // return $donationRecord;
        return view("profile",[ 'userProfile'=>$userProfile , 'donationRecords'=>$donationRecord]);
    }

    function beneficiaryProfile(){
        $user_id = Auth::user()->id;
        $beneficiary=Approved::with( relations: 'getResourcesRelation') 
        ->where('user_id',$user_id)
        ->get();
        
        return view("beneficiaryProfile",[ 'beneficiary'=>$beneficiary ]);
    }
}