<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alerservice;

class Alertcontroller extends Controller
{
    //
    public function list()
    {
    	$alerts = Alerservice::all();
    	return view('admin.alertlist',compact('alerts'));

    }
}
