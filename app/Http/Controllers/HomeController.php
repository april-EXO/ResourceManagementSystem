<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Approved;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user_id = Auth::user()->id;
        $beneficiaries = Approved::all();
        return view('home', ['beneficiaries'=>$beneficiaries]);
    }

    public function viewAllBeneficiaries()
    {
        //$user_id = Auth::user()->id;
        $beneficiaries = Approved::all();
        return view('allBeneficiaries', ['beneficiaries'=>$beneficiaries]);
    }

    public function loadBeneficiaryDetail($id)
    {    
           
        $beneficiary=Approved::with( relations: 'getResourcesRelation') 
        ->where('id',$id)
        ->get();
        return view('donate.main', ['beneficiary'=>$beneficiary]);
    }
}