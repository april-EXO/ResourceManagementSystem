<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationRecord;
use App\Models\Approved;
use App\Models\ResourcesDonation;
use App\Models\Resources;
use Illuminate\Support\Facades\Auth;

class DonationRecordController extends Controller
{
    function loadTrackingPage( $id )
    {
         $data= DonationRecord::join('resource_donations' , 'resource_donations.donation_records_id', '=', 'donation_records.id' )
         ->where('donation_records.id', $id)
        ->select(['donation_records.*', 'resource_donations.*'])
        ->get();

        //return $data;
        return view('donationTracking', ['donationRecords' => $data]);
    }

    function loadDonationReceivedPage(){
        
        $user_id = Auth::user()->id;
        $beneficiary_id = Approved::where('user_id',$user_id)
        ->value('id');

        $donationRecords = DonationRecord::join('users','users.id','=','user_id')
        ->with(relations: 'getDonationResourcesRelation')
        ->where('beneficiary_id',$beneficiary_id)
        ->select(['donation_records.*','users.name'])
        ->get();      
        
        return view('DonationReceived', ['donationRecords'=>$donationRecords]);
        
    }

    function loadDonationHistoryPage(){
        
        $user_id = Auth::user()->id;
        $beneficiary_id = Approved::where('user_id',$user_id)
        ->value('id');

        $donationRecords = DonationRecord::join('users','users.id','=','user_id')
        ->with(relations: 'getDonationResourcesRelation')
        ->where('beneficiary_id',$beneficiary_id)
        ->select(['donation_records.*','users.name'])
        ->get();      
        
        return view('donationHistory', ['donationRecords'=>$donationRecords]);
        
    }

    function receivedFailed(Request $req){
        $id=$req->id;
        $dr=DonationRecord::find($id);
        $dr->status="failed";
        $dr->save();
        
        return redirect()->back();
    }

    function receivedSuccess(Request $req){
        $id=$req->id;
        
        $itemsDonated=ResourcesDonation::where('donation_records_id',$id)
        ->get();
        
        foreach($itemsDonated as $key => $item){
            if($item->resources_id !=NULL ){
            $beneficiary_resource=Resources::find($item->resources_id);
            $beneficiary_resource->quantity -= $item->quantity;
            $beneficiary_resource->save();
        }
        }  
        
        $dr=DonationRecord::find($id);
        $dr->status="success";
        $dr->save();
          
        return redirect()->back();
    }
}