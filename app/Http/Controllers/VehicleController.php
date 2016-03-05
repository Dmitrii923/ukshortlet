<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Cartype;
use Illuminate\Support\Facades\File;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehiclelist',compact('vehicles'));
    }

    public function create()
    {
        $cartypes = Cartype::all();
        return view('admin.vehicleadd',compact('cartypes'));
    }

    public function store(Request $request)
    {


          $msg = [
            'maker.required' => 'Enter maker ',
            'enginemodel.required'      => 'Enter enginemodel '
        ];

        $this->validate($request,[
            'maker' => 'required',
            'enginemodel'      => 'required'
        ],$msg);


        $filename = '';
        if ($request->hasFile('vehicleimage')) {
            $destinationPath ='/vehicleimage/';
            $extension = $request->file('vehicleimage')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('vehicleimage')->move(public_path() . $destinationPath, $filename);

        }

        $vehicle = new Vehicle();
        $vehicle->vehicleimage = $filename;
        $vehicle->maker = $request->maker;
        $vehicle->enginemodel = $request->enginemodel;
        $vehicle->model = $request->model;
        $vehicle->horsepower = $request->horsepower;
        $vehicle->typeid = $request->typeid;
        $vehicle->mielege = $request->mielege;
        $vehicle->liscenceno = $request->liscenceno;
        $vehicle->save();
        return redirect()->back()->with('success', 'Vehicle added successfully !!!');

    }


    public function edit($id)
    {
        $vehicles = Vehicle::findOrFail($id);
        $cartypes = Cartype::all();
        return view('admin.vehicledit',compact('vehicles','cartypes'));
    }


    public function update(Request $request,$id)
    {
        $msg = [
            'maker.required' => 'Enter maker ',
            'enginemodel.required'      => 'Enter enginemodel '
        ];

        $this->validate($request,[
            'maker' => 'required',
            'enginemodel'      => 'required'
        ],$msg);



        $vehicle = Vehicle::find($id);

        if ($request->hasFile('vehicleimage'))
        {
            $exfile = '/vehicleimage/'.$vehicle->vehicleimage;
            if(File::exists($exfile))
            {
                File::delete($exfile);
            }

            $destinationPath ='/vehicleimage/';
            $extension = $request->file('vehicleimage')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('vehicleimage')->move(public_path() . $destinationPath, $filename);

        }else{
            $filename = $request->oldvehicleimage;
        }

        $vehicle->vehicleimage = $filename;
        $vehicle->maker = $request->maker;
        $vehicle->enginemodel = $request->enginemodel;
        $vehicle->model = $request->model;
        $vehicle->horsepower = $request->horsepower;
        $vehicle->typeid = $request->typeid;
        $vehicle->mielege = $request->mielege;
        $vehicle->liscenceno = $request->liscenceno;
        $vehicle->save();
        return redirect()->back()->with('success', 'Vehicle added successfully !!!');

    }


     public function destroy($id)
    {
       $cartype =  Vehicle::findOrFail($id);
       $cartype->delete();
       return redirect('admin/vehicles')->with('delete','Vehicle has deleted !');
    }




}
