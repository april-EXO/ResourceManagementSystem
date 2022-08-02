<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\beneficiary;
use App\Models\connector;
use App\Models\contributor;
use App\Models\volunteer;

class formController extends Controller
{
    function addBeneficiary(Request $req){
        $ben = new beneficiary;
        $ben->name = $req -> name;
        $ben->regnum = $req -> id;
        $ben->state = $req -> state;
        $ben->postcode = $req -> postcode;
        $ben->location = $req -> location;
        $ben->contactperson = $req -> contactperson;
        $ben->contactnumber = $req -> contactnumber;
        $ben->website = $req -> website;
        $ben->page = $req -> page;
        $ben->moneyamount = $req -> money;
        $ben->moneyother = $req -> otherAmount;
        $ben->goodsFoodGroceries = $req -> goodsFoodGroceries;
        $ben->goodsFurnitureFixing = $req -> goodsFurnitureFixing;
        $ben->goodsElectricalItemsGadgets = $req -> goodsElectricalItemsGadgets;
        $ben->goodsTranspotation = $req -> goodsTranspotation;
        $ben->goodsEducationalMaterial = $req -> goodsEducationalMaterial;
        $ben->other1 = $req -> other1;
        $ben->otherGoods = $req -> otherGoods;
        $ben->cleaning = $req -> cleaning;
        $ben->moving = $req -> moving;
        $ben->education = $req -> education;
        $ben->other2 = $req -> other2;
        $ben->otherServices = $req -> otherServices;
        $ben->message = $req -> message;        
        $ben->save();
        return redirect("/form/beneficiary");
    }

    function addConnector(Request $req){
        $con = new connector;
        $con->projecttitle = $req -> projectTitle;
        $con->orgname = $req -> name;
        $con->orgregnum = $req -> id;

        $con->beneficiaryname = $req -> beneficiaryName;
        $con->beneficiarycontactperson = $req -> beneficiaryContactperson;
        $con->beneficiarycontactnumber = $req -> beneficiaryContactnumber;

        $con->state = $req -> state;
        $con->postcode = $req -> postcode;
        $con->location = $req -> location;

        $con->beneficiarywebsite = $req -> beneficiaryWebsite;
        $con->beneficiarypage = $req -> beneficiaryPage;

        $con->date = $req -> date;
        $con->timestart = $req -> timeStart;
        $con->timeend = $req -> timeEnd;

        $con->volunteernumber = $req -> volunteerNumber;

        $con->moneyamount = $req -> money;
        $con->moneyother = $req -> otherAmount;

        $con->goodsFoodGroceries = $req -> goodsFoodGroceries;
        $con->goodsFurnitureFixing = $req -> goodsFurnitureFixing;
        $con->goodsElectricalItemsGadgets = $req -> goodsElectricalItemsGadgets;
        $con->goodsTranspotation = $req -> goodsTranspotation;
        $con->goodsEducationalMaterial = $req -> goodsEducationalMaterial;
        $con->other1 = $req -> other1;
        $con->otherGoods = $req -> otherGoods;

        $con->cleaning = $req -> cleaning;
        $con->moving = $req -> moving;
        $con->education = $req -> education;
        $con->other2 = $req -> other2;
        $con->otherServices = $req -> otherServices;

        $con->message = $req -> message;        
        $con->save();
        return redirect("/form/connector");
    }

    function addContributor(Request $req){
        $cont = new contributor;
        $cont->name = $req -> name;
        $cont->regnum = $req -> id;

        $cont->state = $req -> state;
        $cont->postcode = $req -> postcode;
        $cont->location = $req -> location;

        $cont->contactperson = $req -> contactperson;
        $cont->contactnumber = $req -> contactnumber;
        
        $cont->website = $req -> website;
        $cont->page = $req -> page;
        
        $cont->moneyamount = $req -> money;
        $cont->moneyother = $req -> otherAmount;
        $cont->frequency = $req -> frequency;

        $cont->goodsFoodGroceries = $req -> goodsFoodGroceries;
        $cont->goodsFurnitureFixing = $req -> goodsFurnitureFixing;
        $cont->goodsElectricalItemsGadgets = $req -> goodsElectricalItemsGadgets;
        $cont->goodsTranspotation = $req -> goodsTranspotation;
        $cont->goodsEducationalMaterial = $req -> goodsEducationalMaterial;
        $cont->other1 = $req -> other1;
        $cont->otherGoods = $req -> otherGoods;

        $cont->cleaning = $req -> cleaning;
        $cont->moving = $req -> moving;
        $cont->education = $req -> education;
        $cont->other2 = $req -> other2;
        $cont->otherServices = $req -> otherServices;

        $cont->relazone2 = $req -> relazone2;
        $cont->lionsclubjb = $req -> lionsclubjb;
        $cont->superpandateamklangvalley = $req -> superpandateamklangvalley;
        $cont->foodbank448 = $req -> foodbank448;
        $cont->other3 = $req -> other3;
        $cont->otherOrganization = $req -> otherOrganization;
        

        $cont->message = $req -> message;        
        $cont->save();
        return redirect("/form/contributor");
    }

    function addVolunteer(Request $req){
        $vol = new volunteer;
        $vol->name = $req -> name;
        $vol->ic = $req -> id;

        $vol->contactnumber = $req -> contactnumber;
        $vol->email = $req -> email;
        
        $vol->state = $req -> state;
        $vol->postcode = $req -> postcode;
        $vol->location = $req -> location;

        $vol->page = $req -> page;

        $vol->cleaning = $req -> cleaning;
        $vol->moving = $req -> moving;
        $vol->education = $req -> education;
        $vol->other1 = $req -> other1;
        $vol->otherServices = $req -> otherServices;

        
        $vol->SATtime1 = $req -> SATtime1;
        $vol->SATtime2 = $req -> SATtime2;
        $vol->SATtime3 = $req -> SATtime3;
        $vol->SATtime4 = $req -> SATtime4;
        $vol->SATother = $req -> SATother;
        $vol->SATothertime = $req -> SATothertime;

        $vol->SUNtime1 = $req -> SUNtime1;
        $vol->SUNtime2 = $req -> SUNtime2;
        $vol->SUNtime3 = $req -> SUNtime3;
        $vol->SUNtime4 = $req -> SUNtime4;
        $vol->SUNother = $req -> SUNother;
        $vol->SUNotherTime = $req -> SUNotherTime;
       
        $vol->MONtime1 = $req -> MONtime1;
        $vol->MONtime2 = $req -> MONtime2;
        $vol->MONtime3 = $req -> MONtime3;
        $vol->MONtime4 = $req -> MONtime4;
        $vol->MONother = $req -> MONother;
        $vol->MONotherTime = $req -> MONotherTime;

        $vol->TUEStime1 = $req -> TUEStime1;
        $vol->TUEStime2 = $req -> TUEStime2;
        $vol->TUEStime3 = $req -> TUEStime3;
        $vol->TUEStime4 = $req -> TUEStime4;
        $vol->TUESother = $req -> TUESother;
        $vol->TUESotherTime = $req -> TUESotherTime;

        $vol->WEDtime1 = $req -> WEDtime1;
        $vol->WEDtime2 = $req -> WEDtime2;
        $vol->WEDtime3 = $req -> WEDtime3;
        $vol->WEDtime4 = $req -> WEDtime4;
        $vol->WEDother = $req -> WEDother;
        $vol->WEDotherTime = $req -> WEDotherTime;
        
        $vol->THURtime1 = $req -> THURtime1;
        $vol->THURtime2 = $req -> THURtime2;
        $vol->THURtime3 = $req -> THURtime3;
        $vol->THURtime4 = $req -> THURtime4;
        $vol->THURother = $req -> THURother;
        $vol->THURotherTime = $req -> THURotherTime;

        $vol->FRItime1 = $req -> FRItime1;
        $vol->FRItime2 = $req -> FRItime2;
        $vol->FRItime3 = $req -> FRItime3;
        $vol->FRItime4 = $req -> FRItime4;
        $vol->FRIother = $req -> FRIother;
        $vol->FRIotherTime = $req -> FRIotherTime;

        $vol->message = $req -> message;        
        $vol->save();
        return redirect("/form/volunteer");
    }

    function viewBeneficiary()
    {
        $data = beneficiary::all();
        return view('formview-v/beneficiary',['beneficiary'=>$data]);
    }

    function viewConnector()
    {
        $data = connector::all();
        return view('formview-v/connector',['connector'=>$data]);
    }

    function viewVolunteer()
    {
        $data = volunteer::all();
        return view('formview-v/volunteer',['volunteer'=>$data]);
    }

    function viewContributor()
    {
        $data = contributor::all();
        return view('formview-v/contributor',['contributor'=>$data]);
    }

    function viewEditBeneficiary($id)
    {
        $data = beneficiary::find($id);
        return view('formview-u/beneficiary',['beneficiary'=>$data]);
    }

    function editBeneficiary(Request $req)
    {
        $ben = beneficiary::find($req -> id);
        $ben->name = $req -> name;
        $ben->regnum = $req -> regnum;
        $ben->state = $req -> state;
        $ben->postcode = $req -> postcode;
        $ben->location = $req -> location;
        $ben->contactperson = $req -> contactperson;
        $ben->contactnumber = $req -> contactnumber;
        $ben->website = $req -> website;
        $ben->page = $req -> page;
        $ben->moneyamount = $req -> money;
        $ben->moneyother = $req -> otherAmount;
        $ben->goodsFoodGroceries = $req -> goodsFoodGroceries;
        $ben->goodsFurnitureFixing = $req -> goodsFurnitureFixing;
        $ben->goodsElectricalItemsGadgets = $req -> goodsElectricalItemsGadgets;
        $ben->goodsTranspotation = $req -> goodsTranspotation;
        $ben->goodsEducationalMaterial = $req -> goodsEducationalMaterial;
        $ben->other1 = $req -> other1;
        $ben->otherGoods = $req -> otherGoods;
        $ben->cleaning = $req -> cleaning;
        $ben->moving = $req -> moving;
        $ben->education = $req -> education;
        $ben->other2 = $req -> other2;
        $ben->otherServices = $req -> otherServices;
        $ben->message = $req -> message;        

        $ben->save();
        return redirect("/form/beneficiary-view");
    }

    function deleteBeneficiary($id)
    {
        $data = beneficiary::find($id);
        $data -> delete();
        return redirect("/form/beneficiary-view");
    }

    function viewEditConnector($id)
    {
        $data = connector::find($id);
        return view('formview-u/connector',['connector'=>$data]);
    }

    function editConnector(Request $req)
    {
        $con = connector::find($req -> id);
        $con->projecttitle = $req -> projectTitle;
        $con->orgname = $req -> name;
        $con->orgregnum = $req -> a;

        $con->beneficiaryname = $req -> beneficiaryName;
        $con->beneficiarycontactperson = $req -> beneficiaryContactperson;
        $con->beneficiarycontactnumber = $req -> beneficiaryContactnumber;

        $con->state = $req -> state;
        $con->postcode = $req -> postcode;
        $con->location = $req -> location;

        $con->beneficiarywebsite = $req -> beneficiaryWebsite;
        $con->beneficiarypage = $req -> beneficiaryPage;

        $con->date = $req -> date;
        $con->timestart = $req -> timeStart;
        $con->timeend = $req -> timeEnd;

        $con->volunteernumber = $req -> volunteerNumber;

        $con->moneyamount = $req -> money;
        $con->moneyother = $req -> otherAmount;

        $con->goodsFoodGroceries = $req -> goodsFoodGroceries;
        $con->goodsFurnitureFixing = $req -> goodsFurnitureFixing;
        $con->goodsElectricalItemsGadgets = $req -> goodsElectricalItemsGadgets;
        $con->goodsTranspotation = $req -> goodsTranspotation;
        $con->goodsEducationalMaterial = $req -> goodsEducationalMaterial;
        $con->other1 = $req -> other1;
        $con->otherGoods = $req -> otherGoods;

        $con->cleaning = $req -> cleaning;
        $con->moving = $req -> moving;
        $con->education = $req -> education;
        $con->other2 = $req -> other2;
        $con->otherServices = $req -> otherServices;

        $con->message = $req -> message;        
        $con->save();
        return redirect("/form/connector-view");
    }

    function deleteConnector($id)
    {
        $data = connector::find($id);
        $data -> delete();
        return redirect("/form/connector-view");
    }
}
