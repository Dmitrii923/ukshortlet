<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
class CustomAuthController extends Controller
{
    //

	public function index()
	{
		return view('auth.login');
	} 


	public function customLogin(Request $request)
	{
		$request->validate([
			'email' => 'required',
			'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');
		if (Auth::attempt($credentials)) {
			return redirect()->intended('admin/dashboard')
			->withSuccess('Signed in');
		}

		return redirect("login")->withSuccess('Login details are not valid');
	}



	public function secureloginpost(Request $request)
	{
		$request->validate([
			'email' => 'required',
			'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');
		if (Auth::attempt($credentials)) {
			return redirect()->intended('admin/dashboard')
			->withSuccess('Signed in');
		}

		return redirect("login")->withSuccess('Login details are not valid');
	}


	public function registration()
	{
		return view('auth.registration');
	}


	public function customRegistration(Request $request)
	{  
		$request->validate([
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6',
		]);

		$data = $request->all();
		$check = $this->create($data);

		return redirect("admin/dashboard")->withSuccess('You have signed-in');
	}



	public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
        	$role =  Auth::user()->role;
        	$userid =  Auth::user()->id;
        	if($role=="Admin")
        	{
        		$pres =DB::table('propertylisting')->count();
        		$userres =DB::table('users')->count();
        		
        	}else{
        		$pres =DB::table('propertylisting')->where('userid',$userid)->count();
        		$userres =DB::table('users')->count();
        		$userres='';
        	}
            return view('admin.dashboard',compact('pres','userres'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }




}
