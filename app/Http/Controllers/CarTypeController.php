<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartype;

class CarTypeController extends Controller
{
    
    public function index()
    {
        $cartypes = Cartype::all();
        return view('admin.cartypelist',compact('cartypes'));
    }

    public function create()
    {
        return view('admin.cartypeadd');
    }

    
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'cartype' => 'required',
            'seatCapacity' => 'required',
            'isenable' => 'Active'
        ]);
        $cartypes = Cartype::create($storeData);
         return redirect('admin/cartypes')->with('success', 'Completed Successfully!');
    }


    public function edit($id)
    {
        $cartyperes = Cartype::findOrFail($id);
        return view('admin.cartypeedit',compact('cartyperes'));
    }

   
    public function update(Request $request, $id)
    {
       $updateData = $request->validate([
            'cartype' => 'required',
            'seatCapacity' => 'required',
            'isenable' => 'Active'
        ]);
        Cartype::whereId($id)->update($updateData);
        return redirect('admin/cartypes')->with('success','Completed Successfully');
    }

  
    public function destroy($id)
    {
       $cartype =  Cartype::findOrFail($id);
       $cartype->delete();
       return redirect('admin/cartypes')->with('delete','cartype has deleted !');
    }
}
