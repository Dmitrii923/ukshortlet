<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;
use App\Models\Vehicle;

class FuelController extends Controller
{
    //

    public function index()
	{
		$fuels = Fuel::all();
		return view('admin.fuellist',compact('fuels'));
	}


	public function create()
	{
		$vehicles = Vehicle::all();
		return view('admin.fueladd',compact('vehicles'));
	}

	public function store(Request $request)
	{
		$data = array(
			'vehicleid' => $request->vehicleid,
			'startmeter' => $request->startmeter,
			'ref' => $request->ref,
			'qty' => $request->qty,
			'price' => $request->price,
			'state' => $request->state,
			'note' => $request->note,
			'date' => $request->date
		);
		
        $group = Fuel::create($data);
         return redirect('admin/fuellist')->with('success', 'Completed Successfully!');
	}


	public function edit($id)
	{
		$vehicles = Vehicle::all();
		$fuelres = Fuel::findOrFail($id);
        return view('admin.fueledit',compact('fuelres','vehicles'));
	}


	public function update(Request $request, $id)
    {
      	$data = array(
			'vehicleid' => $request->vehicleid,
			'startmeter' => $request->startmeter,
			'ref' => $request->ref,
			'qty' => $request->qty,
			'price' => $request->price,
			'state' => $request->state,
			'note' => $request->note,
			'date' => $request->date
		);
        Fuel::whereId($id)->update($data);
        return redirect('admin/fuellist')->with('success','Completed Successfully');
    }


     public function destroy($id)
    {
       $fuel =  Fuel::findOrFail($id);
       $fuel->delete();
       return redirect('admin/fuellist')->with('delete','cartype has deleted !');
    }





}
