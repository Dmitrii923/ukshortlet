<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partsacategory;
use DB;

class PartscategoryController extends Controller
{
    //

    public function partcatlist()
	{
		$parts = Partsacategory::all();
		return view('admin.partcatlist',compact('parts'));
	}

	public function partcatadd()
	{

		return view('admin.partcatadd');
	}


}
