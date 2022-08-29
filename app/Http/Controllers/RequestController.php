<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;
use App\Models\Approved;
use App\Models\Resources;
use App\Models\ResourcesApply;
use App\Models\User;

class RequestController extends Controller
{
	function addApplication(Request $req)
	{
		$ben = new Application;
		$ben->name = $req->name;
		$ben->description = $req->description;
		$ben->state = $req->state;
		$ben->postcode = $req->postcode;
		$ben->location = $req->location;
		$ben->contact_person = $req->contact_person;
		$ben->contact_num = $req->contact_num;
		$ben->website = $req->website;
		$ben->webpage = $req->webpage;

		if (!$req->has('photo')) {
			return response()->json(['message' => 'Missing file'], 422);
		}
		$imageName = time() . '.' . $req->photo->extension();
		$req->photo->move(public_path('images'), $imageName);
		$ben->photo = $imageName;

		$ben->date = $req->date;
		$ben->time = $req->time;
		$ben->status = $req->status;
		$ben->user_id = $req->user_id;
		$ben->save();

		$lastRecord = Application::where('name', $req->name)->latest()->first();

		// $num_rows = $req->rowCount;
		// for ($i = 1; $i <= $num_rows; $i++) {


		$items = $req->item;
		// $data = array_filter($items);	
		$quantities = $req->quantity;
		$units = $req->unit;



		foreach ($items as $i => $item) {
			if (!empty($item) && !empty($quantities[$i]) && !empty($units[$i])) {
				$res = new ResourcesApply;
				$res->detail = $item;
				$res->quantity = $quantities[$i];
				$res->unit = $units[$i];
				$res->beneficiary_applications_id = $lastRecord->id;
				$res->save();
			}
		}

		// return redirect("/beneficiary-application");
		// return redirect("/")->back() ->with('alert', 'Application Sent!');
		//succes 
		return redirect('/');
		// }
	}

	function viewApplicationAdminPending()
	{
		$data = Application::with(relations: 'getResourcesApplyRelation')->get();
		return view('/adminpagePending', ['application' => $data]);
	}

	function viewApplicationAdminRejected()
	{
		$data = Application::with(relations: 'getResourcesApplyRelation')->get();
		return view('/adminpageRejected', ['application' => $data]);
	}

	function viewApplicationAdminSuccess()
	{
		$data = Application::with(relations: 'getResourcesApplyRelation')->get();
		return view('/adminpageSuccess', ['application' => $data]);
	}

	function approveApplication(Request $req)
	{
		$applicant = Application::find($req->id);
		$ben = new Approved;
		$ben->name = $applicant->name;
		$ben->description = $applicant->description;
		$ben->state = $applicant->state;
		$ben->postcode = $applicant->postcode;
		$ben->location = $applicant->location;
		$ben->contact_person = $applicant->contact_person;
		$ben->contact_num = $applicant->contact_num;
		$ben->website = $applicant->website;
		$ben->webpage = $applicant->webpage;
		$ben->photo = $applicant->name;
		$ben->date = $applicant->date;
		$ben->time = $applicant->time;
		$ben->user_id = $applicant->user_id;
		$ben->save();

		$applicant->status = "success";
		$applicant->save();

		$lastRecord = Approved::where('name', $ben->name)->latest()->first();
		$beneficiary_id = $lastRecord->id;

		$resources = ResourcesApply::where('beneficiary_applications_id', $applicant->id)
			->get();

		foreach ($resources as $resource) {
			$res = new Resources;
			$res->detail = $resource->detail;
			$res->quantity = $resource->quantity;
			$res->unit = $resource->unit;
			$res->beneficiary_id = $beneficiary_id;
			$res->save();
		}

		$user = User::find($ben->user_id);
		$user->isBeneficiary = 1;
		$user->save();

		return redirect()->back();
	}

	function rejectApplication(Request $req)
	{
		$applicant = Application::find($req->id);
		$applicant->status = "rejected";
		$applicant->save();
		return redirect()->back();
	}
}
