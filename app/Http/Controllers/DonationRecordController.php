<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationRecord;
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
}
