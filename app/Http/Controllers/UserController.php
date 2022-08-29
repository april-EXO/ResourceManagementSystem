<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Profile;
use App\Models\DonationRecord;
use App\Models\Approved;
use App\Models\Resources;
use App\Models\Application;
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

    function checkApplicantExistance(){
        $user_id = Auth::user()->id;
        $applicant=Application::where('user_id',$user_id)
        ->get();
        return view("applicationSubmittedVerify",[ 'applicant'=>$applicant]);
    }

    function showAppyForm(){
        $user_id = Auth::user()->id;
        $applicant=Application::where('user_id',$user_id)
        ->get();
        return view("beneficiary-application",[ 'applicant'=>$applicant]);
    }

    function beneficiaryProfile(){
        $user_id = Auth::user()->id;
        $beneficiary=Approved::with( relations: 'getResourcesRelation') 
        ->where('user_id',$user_id)
        ->get();
        
        return view("beneficiaryProfile",[ 'beneficiary'=>$beneficiary ]);
    }

    function editResource(Request $req){

        $ID=$req->id;
        $details = $req->detail;	
        $quantities = $req->quantity;
        $units = $req->unit;
        
        foreach($ID as $i => $id){
            $resource = Resources::find($id);
            $resource->detail=$details[$i];
            $resource->quantity=$quantities[$i];
            $resource->unit=$units[$i];
            $resource->save();
        }

        return redirect()->back();
    }

    function editBasicInfo(Request $req){

        $id=$req->id;
        $beneficiary=Approved::find($id);
       
        $beneficiary->name = $req->name;
        $beneficiary->description = $req->description;
        $beneficiary->website = $req->website;
        $beneficiary->webpage = $req->webpage;
        $beneficiary->contact_person = $req->contact_person;
        $beneficiary->contact_num = $req->contact_num;
           
        $beneficiary->save();

        return redirect()->back();
    }

    function editAddress(Request $req){

        $id=$req->id;
        $beneficiary=Approved::find($id);
       
        $beneficiary->location = $req->location;
        $beneficiary->state = $req->state;
        $beneficiary->postcode = $req->postcode;
           
        $beneficiary->save();

        return redirect()->back();
    }

    function editVisitHour(Request $req){

        $id=$req->id;
        $beneficiary=Approved::find($id);
       
        $beneficiary->date = $req->date;
        $beneficiary->time = $req->time;
           
        $beneficiary->save();

        return redirect()->back();
    }
}