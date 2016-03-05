<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    //

	public function index()
	{
		$groups = Group::all();
		return view('admin.grouplist',compact('groups'));
	}


	public function create()
	{
		return view('admin.groupadd');
	}

	public function store(Request $request)
	{

		$storeData = $request->validate([
            'grpname' => 'required',
            'grpdesc' => 'required',
        ]);
        $group = Group::create($storeData);
         return redirect('admin/groups')->with('success', 'Completed Successfully!');
	}


	public function edit($id)
	{
		$groupres = Group::findOrFail($id);
        return view('admin.groupedit',compact('groupres'));
	}

	public function update(Request $request, $id)
    {
       $updateData = $request->validate([
            'grpname' => 'required',
            'grpdesc' => 'required',
            'grpnote' => 'required'
        ]);
        Group::whereId($id)->update($updateData);
        return redirect('admin/groups')->with('success','Completed Successfully');
    }


    public function destroy($id)
    {
       $group =  Group::findOrFail($id);
       $group->delete();
       return redirect('admin/groups')->with('delete','cartype has deleted !');
    }



}
