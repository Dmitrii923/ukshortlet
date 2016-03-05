<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Vehicle;
use App\Models\Transanction;
use DB;

class IncomeController extends Controller
{
    //

    public function index()
	{
		$incomeres = Income::all();
		// $incomeres = DB::table('incomes')
		// 			->join('vehicles','incomes.vehicleid','=','vehicles.id')
		// 			->join('transanctions','incomes.headid','=','transanctions.id')
		// 			->get();
		return view('admin.incomelist',compact('incomeres'));
	}


	public function incomeadd()
	{
		$vehicles = Vehicle::all();
		$heads = DB::table('transanctions')->where('type','income')->get();
		return view('admin.incomeadd',compact('vehicles','heads'));
	}

	public function incomesave(Request $request)
	{
		$income  = new Income();
        $income->vehicleid = $request->vehicleid;
        $income->headid = $request->headid;
        $income->milege = $request->milege;
        $income->date = $request->date;
        $income->amount = $request->amount;
        $income->taxpercent = $request->taxpercent;
        $income->totalamount = $request->totalamount;
        $income->save();
        return redirect()->back()->with('success', 'Vehicle added successfully !!!');

	}


	public function incomeedit($id)
	{
		$vehicles = Vehicle::all();
		$heads = DB::table('transanctions')->where('type','income')->get();
		$incomeres = Income::findOrFail($id);
        return view('admin.incomeedit',compact('incomeres','vehicles','heads'));
	}



	public function incomeupdate(Request $request, $id)
    {
      	$data = array(
			'vehicleid' => $request->vehicleid,
			'headid' => $request->headid,
			'milege' => $request->milege,
			'date' => $request->date,
			'amount' => $request->amount,
			'taxpercent' => $request->taxpercent,
			'totalamount' => $request->totalamount
		);
        Income::whereId($id)->update($data);
        return redirect('admin/incomelist')->with('success','Completed Successfully');
    }


    public function destroy($id)
    {
       $income =  Income::findOrFail($id);
       $income->delete();
       return redirect('admin/incomelist')->with('delete','cartype has deleted !');
    }





}
