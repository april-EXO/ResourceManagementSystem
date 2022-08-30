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
        $beneficiaries = Approved::all();
        $count = count($beneficiaries);
        return view('home', ['beneficiaries'=>$beneficiaries,'count'=>$count]);
    }

    public function viewAllBeneficiaries()
    {
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

	public function loadBeneficiaryDetailSelf($id)
    {    
           
        $beneficiary=Approved::with( relations: 'getResourcesRelation') 
        ->where('id',$id)
        ->get();
        return view('donate.self', ['beneficiary'=>$beneficiary]);
    }

	public function loadBeneficiaryDetailShop($id)
    {    
           
        $beneficiary=Approved::with( relations: 'getResourcesRelation') 
        ->where('id',$id)
        ->get();
        return view('donate.shop', ['beneficiary'=>$beneficiary]);
    }
}