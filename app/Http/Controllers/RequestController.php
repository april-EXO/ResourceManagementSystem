<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;
use App\Models\Approved;
use App\Models\Resources;
use App\Models\ResourcesApply;

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

		$num_rows = $req->rowCount;
		for ($i = 1; $i <= $num_rows; $i++) {


			$items = $req->item;
			$data = array_filter($items);
			$quantities = $req->quantity;
			$units = $req->unit;

			foreach ($data as $i => $item) {

				$res = new ResourcesApply;
				$res->detail = $item;
				$res->quantity = $quantities[$i];
				$res->unit = $units[$i];
				$res->beneficiary_applications_id = $lastRecord->id;
				$res->save();
			}

			return redirect("/beneficiary-application");
		}
	}
}
