<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Featureserviceprovider;
use Illuminate\Support\Facades\File;


class Featureservicecontorller extends Controller
{
    //
    public function list()
    {
    	$fserviceproviders = Featureserviceprovider::all();
        return view('admin.fservicelist',compact('fserviceproviders'));
    }


    public function add()
    {
        return view('admin.fserviceadd');
    }



    public function store(Request $request)
    {

        $filename = '';
        if ($request->hasFile('adsimage')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('adsimage')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('adsimage')->move(public_path() . $destinationPath, $filename);

        }

        $featureprovider = new Featureserviceprovider();
        $featureprovider->adsimage = $filename;
        $featureprovider->adsurl = $request->adsurl;
        $featureprovider->save();
        return redirect()->back()->with('success', 'Service Provider added successfully !!!');

    }

    public function edit(Request $req,$id)
    {
        $editres = Featureserviceprovider::findOrFail($id);
        return view('admin.fserviceedit',compact('editres'));
    }


     public function update(Request $request,$id)
    {
        
        $fserviceprovider = Featureserviceprovider::find($id);
        if ($request->hasFile('adsimage'))
        {
            $exfile = '/uploadfile/'.$fserviceprovider->adsimage;
            if(File::exists($exfile))
            {
                File::delete($exfile);
            }

            $destinationPath ='/uploadfile/';
            $extension = $request->file('adsimage')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('adsimage')->move(public_path() . $destinationPath, $filename);

        }else{
            $filename = $request->oldadsimage;
        }

        $fserviceprovider->adsimage = $filename;
        $fserviceprovider->adsurl = $request->adsurl;
        $fserviceprovider->save();
        return redirect()->back()->with('success', 'Service provider updated successfully !!!');

    }
    public function del($id)
    {
       $cartype =  Featureserviceprovider::findOrFail($id);
       $cartype->delete();
       return redirect('admin/fserviceproviderlist')->with('delete','Feature service provider has deleted !');
    }
}
