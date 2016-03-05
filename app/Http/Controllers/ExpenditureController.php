<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenditure;
use App\Models\Vehicle;
use App\Models\Transanction;
use DB;

class ExpenditureController extends Controller
{
    //


    public function destroy($id)
    {
       $income =  Expenditure::findOrFail($id);
       $income->delete();
       return redirect('admin/expenditurelist')->with('delete','cartype has deleted !');
    }





    public function expenditurelist()
	{
		$expres = Expenditure::all();
		/*$expres = DB::table('expenditures')
					->join('vehicles','expenditures.vehicleid','=','vehicles.id')
					->join('transanctions','expenditures.headid','=','transanctions.id')
					->get();*/
		
		return view('admin.expenditurelist',compact('expres'));
	}


	public function expenditureadd()
	{
		$vehicles = Vehicle::all();
		$heads = DB::table('transanctions')->where('type','expense')->get();
		return view('admin.expenditureadd',compact('vehicles','heads'));
	}




	public function expendituresave(Request $request)
	{
		$expenditure  = new Expenditure();
        $expenditure->vehicleid = $request->vehicleid;
        $expenditure->headid = $request->headid;
        $expenditure->date = $request->date;
        $expenditure->amount = $request->amount;
        $expenditure->note = $request->note;
        $expenditure->save();
        return redirect()->back()->with('success', 'Vehicle added successfully !!!');

	}

	public function expendituredit($id)
	{
		$vehicles = Vehicle::all();
		$heads = DB::table('transanctions')->where('type','expense')->get();
		$incomeres = Expenditure::findOrFail($id);
        return view('admin.expendituredit',compact('incomeres','vehicles','heads'));
	}



	public function expenditureupdate(Request $request, $id)
    {
      	$data = array(
			'vehicleid' => $request->vehicleid,
			'headid' => $request->headid,
			'date' => $request->date,
			'amount' => $request->amount,
			'note' => $request->note
		);
        Expenditure::whereId($id)->update($data);
        return redirect('admin/expenditurelist')->with('success','Completed Successfully');
    }




	


}
