<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transanction;
use DB;


class TransanctionContorller extends Controller
{
    //
	public function index()
	{
		$transres = DB::table('transanctions')->where('type','income')->get();
		return view('admin.headlist',compact('transres'));
	}


	public function expenseheds()
	{
		$transres = DB::table('transanctions')->where('type','expense')->get();
		return view('admin.expenseheadlist',compact('transres'));
	}


	

	public function incomeheadadd()
	{
		return view('admin.incomeheadadd');
	}

	public function expensehedadd()
	{
		return view('admin.expensehedadd');
	}

	


	public function transanctionsave(Request $request)
	{
		$data = array(
			'headname' => $request->headname,
			'type' => $request->type
		);
		
		$group = Transanction::create($data);
		if($request->type=="income")
		{
			return redirect('admin/incomeheads')->with('success', 'Completed Successfully!');
		}elseif($request->type="expense")
		{
			return redirect('admin/expenseheds')->with('success', 'Completed Successfully!');
		}
		
	}


	

	public function headedit($id)
	{
		$tranheadres = Transanction::findOrFail($id);
		return view('admin.headedit',compact('tranheadres'));
	}


	public function update(Request $request, $id)
	{
		$data = array(
			'headname' => $request->headname,
		);
		Transanction::whereId($id)->update($data);
		return redirect()->back()->with('success','Completed Successfully');
	}


	public function destroy($id)
	{
		$headres =  Transanction::findOrFail($id);
		if($headres->type=="income")
		{
			$headres->delete();
			return redirect('admin/incomeheads')->with('delete','Head has deleted !');
		}else{
			$headres->delete();
			return redirect('admin/expenseheds')->with('delete','Head has deleted !');
		}
	}







}
