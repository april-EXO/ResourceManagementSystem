<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;
use App\Models\Approved;
use App\Models\Resources;
use App\Models\ResourcesApply;
use App\Models\DonationRecord;
use App\Models\ResourcesDonation;
use App\Models\User;

class DonationController extends Controller
{
	function submitDonationSelf(Request $req)
	{
		$rec = new DonationRecord;
		$rec->type = $req->type;
		$rec->method = $req->method;
		$rec->donation_detail = $req->donation_detail;
		$rec->comment = $req->comment;
		$rec->status = $req->status;
		$rec->beneficiary_id = $req->beneficiary_id;
		$rec->user_id = $req->user_id;
		$rec->save();

		$lastRecord = DonationRecord::where('user_id', $req->user_id)->latest()->first();

		$resd = $req->resd;
		$q = $req->q;
		$u = $req->u;
		$rid = $req->rid;

		if($resd!=NULL){
		foreach ($resd as $f => $item) {
			if (!empty($q[$f]) && ($q[$f]) != 0 && !empty($resd[$f]) && !empty($u[$f])) {
				$res = new ResourcesDonation;
				$res->detail = $resd[$f];
				$res->quantity = $q[$f];
				$res->unit = $u[$f];
				$res->donation_records_id = $lastRecord->id;
				$res->resources_id = $rid[$f];
				$res->save();
			}
		}
	}

		$items = $req->item;
		$quantities = $req->quantity;
		$units = $req->unit;

		foreach ($items as $i => $item) {
			if (!empty($item) && !empty($quantities[$i]) && !empty($units[$i])) {
				$r = new ResourcesDonation;
				$r->detail = $item;
				$r->quantity = $quantities[$i];
				$r->unit = $units[$i];
				$r->donation_records_id = $lastRecord->id;
				$r->save();
			}	
		}
		return redirect("/");
	}


	function submitDonationShop(Request $req)
	{
		$rec = new DonationRecord;
		$rec->type = $req->type;
		$rec->date = $req->date;
		$rec->time = $req->time;
		$rec->method = $req->method;
		$rec->comment = $req->comment;
		$rec->status = $req->status;
		$rec->beneficiary_id = $req->beneficiary_id;
		$rec->user_id = $req->user_id;
		$rec->save();

		$lastRecord = DonationRecord::where('user_id', $req->user_id)->latest()->first();

		$resd = $req->resd;
		$q = $req->q;
		$filterQuantity = array_filter($q);
		$u = $req->u;
		$rid = $req->rid;

		foreach ($filterQuantity as $f => $fq) {
			if (!empty($fq) && ($fq) != 0 && !empty($resd[$f]) && !empty($u[$f])) {
				$res = new ResourcesDonation;
				$res->detail = $resd[$f];
				$res->quantity = $fq;
				$res->unit = $u[$f];
				$res->donation_records_id = $lastRecord->id;
				$res->resources_id = $rid[$f];
				$res->save();
			}
		}

		$items = $req->item;
		$data = array_filter($items);
		$quantities = $req->quantity;
		$units = $req->unit;

		foreach ($data as $i => $item) {
			if (!empty($item) && !empty($quantities[$i]) && !empty($units[$i])) {
				$r = new ResourcesDonation;
				$r->detail = $item;
				$r->quantity = $quantities[$i];
				$r->unit = $units[$i];
				$r->donation_records_id = $lastRecord->id;
				$r->save();
			}
		}
		return redirect("/");
	}
}