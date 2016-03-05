<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Createownerac;
use App\Models\Adcost;
use App\Models\Propertylisting;
use App\Models\Bedroom;
use App\Models\Alluser;
use App\Models\Porpertytype;
use App\Models\News;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Models\City;
use Hash;
use DB;
use Twilio\Rest\Client;


class Adminnewcontroller extends Controller
{


    // fav list //

    public function favlist()
    {
        if(Auth::check()){
            $userid =  Auth::user()->id; 

        $ures = DB::table('favourite')
                ->join('propertylisting','favourite.propertyid','=','propertylisting.id')
                ->where('favourite.userid',$userid)->get();
        return view('admin.favlist',compact('ures'));
        } 
        return redirect("login")->withSuccess('You are not allowed to access');
    }



    public function buytoollist()
    {
        if(Auth::check()){
            $userid =  Auth::user()->id; 

        if($userid=="1")
        {
            $res = DB::table('buytoolpayment')->orderBy('id','desc')->get();
        }else{
            $res = DB::table('buytoolpayment')->where('userid',$userid)->orderBy('id','desc')->get();
        }
        return view('admin.buytoollist',compact('res'));
        } 
        return redirect("login")->withSuccess('You are not allowed to access');
    }






     public function approvereview(Request $req,$id)
    {
         $data  = array('status'=>'1');
        DB::table('review')->where('id',$id)->update($data);
       return redirect('admin/reviewlist')->with('success','Updated successfully.');


    }



     public function pendingreview($id)
    {
        $data  = array('status'=>'0');
        DB::table('review')->where('id',$id)->update($data);
       return redirect('admin/reviewlist')->with('success','Updated successfully.');

    }




    public function reviewlist()
    {
        if(Auth::check()){
            $userid =  Auth::user()->id; 
        $ures = DB::table('review')
                ->join('propertylisting','review.propid','=','propertylisting.id')
                ->orderBy('review.id','desc')->get();
        return view('admin.reviewlist',compact('ures'));
        } 
        return redirect("login")->withSuccess('You are not allowed to access');
    }




    public function profileupdate(Request $req)
    {
        if($req->userid){
            $userid =  $req->userid;
            $data = array(
                'name' => $req->name,
                'title' => $req->title,
                'mobile' => $req->mobile
            );
            DB::table('users')->where('id',$userid)->update($data);
            return redirect('admin/profile')->withSuccess('Profile Updated Successfully');
        } 

    }


    public function profile()
    {
        if(Auth::check()){
            $userid =  Auth::user()->id; 

        $res = DB::table('users')->where('id',$userid)->get();
        return view('admin.profile',compact('res'));
            }
        return redirect("login")->withSuccess('You are not allowed to access');

    }





    // userlist //
    public function userlist()
    {
        if(Auth::check()){
        $ures = Alluser::where('id','!=','1')->where('role','!=','Buyer')->orderBy('id','desc')->get() ;
        return view('admin.userlist',compact('ures'));
        } 
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function buyerlist()
    {
        if(Auth::check()){
        $ures = Alluser::where('id','!=','1')->where('role','=','Buyer')->orderBy('id','desc')->get() ;
        return view('admin.buyerlist',compact('ures'));
        } 
        return redirect("login")->withSuccess('You are not allowed to access');


    }


    // property manage //

    public function propertyadd()
    {
        if(Auth::check()){
        $res = Propertylisting::all();
        $cityres = City::all();
        $bedroomres = Bedroom::all();
        $propertyperes = Porpertytype::all();
        $plans = Adcost::all();
        return view('admin.propertyadd',compact('res','cityres','bedroomres','propertyperes','plans'));
            }
        return redirect("login")->withSuccess('You are not allowed to access');

    }



    public function propertyedit($propertyid)
    {
        if(Auth::check()){
        $res = Propertylisting::findOrFail($propertyid);
        $cityres = City::all();
        $bedroomres = Bedroom::all();
        $propertyperes = Porpertytype::all();
        $plans = Adcost::all();
        return view('admin.propertyedit',compact('res','cityres','bedroomres','propertyperes','plans'));
            }
        return redirect("login")->withSuccess('You are not allowed to access');

    }



    public function propertyarchive(Request $request,$id)
    {
        
        $pres = Propertylisting::find($id);
        $pres->isarchive =  0;
        $pres->save();
        return redirect('admin/propertylist')->with('success', 'Property Updated successfully !!!');

    }


    public function propertypublish(Request $request,$id)
    {
        
        $pres = Propertylisting::find($id);
        $pres->isarchive =  1;
        $pres->save();
        return redirect('admin/propertylist')->with('success', 'Property Updated successfully !!!');
    }

    public function propertylist()
    {
        if(Auth::check()){

            $role =  Auth::user()->role;
            $userid =  Auth::user()->id; 
            if($role=="Admin")
            {
                $res = Propertylisting::all();
            }else{
                $res =Propertylisting::where('userid',$userid)->get();
            }
            return view('admin.propertylist',compact('res'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function propertyadsave(Request $request)
    {

            $userid =  Auth::user()->id;

        $filename = '';
        if ($request->hasFile('pimg')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('pimg')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('pimg')->move(public_path() . $destinationPath, $filename);

        }

        $plisting = new Propertylisting();
        $plisting->adtitle = $request->adtitle;
        $plisting->pinfo = $request->pinfo;
        $plisting->addate = $request->addate;
        $plisting->rent = $request->rent;
        $plisting->cityid = $request->cityid;
        $plisting->postcode = $request->postcode;
        $plisting->address = $request->address;
        $plisting->propertypeid = $request->propertypeid;
        $plisting->bedroomid = $request->bedroomid;
        $plisting->description = $request->description;
        $plisting->adscostpriceid = $request->adscostpriceid;
        $plisting->latitude = $request->latitude;
        $plisting->longitude = $request->longitude;
        $plisting->pimg = $filename;
        $plisting->isactive = '1';
        $plisting->ispaid = 0;
        $plisting->isarchive = 1;
        $plisting->userid = $userid;


        $cityid = $request->cityid;
        $propertypeid = $request->propertypeid;
        $alertres = DB::table('alerservices')->where('cityid',$cityid)->where('serviceid',$propertypeid)->get();
        $plisting->save();

        /*foreach($alertres as $alertrow)
        {
            $phonenos = $alertrow->phone.",";
            $receiverNumber = $phonenos;
            $message = "A property has listed matching with your requirements. Visit ukshortlet.com";
            try {
                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_TOKEN");
                $twilio_number = getenv("TWILIO_FROM");

                $client = new Client($account_sid, $auth_token);
                $client->messages->create($receiverNumber, [
                    'from' => $twilio_number, 
                    'body' => $message]);

               // dd('SMS Sent Successfully.');

            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }

        }*/

        return redirect()->back()->with('success', 'Porperty ad added successfully !!!');

    }

    public function propertyadupdate(Request $request,$id)
    {
        $userid =  Auth::user()->id;
        $plisting = Propertylisting::find($id);
        $filename = '';
        if ($request->hasFile('pimg')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('pimg')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('pimg')->move(public_path() . $destinationPath, $filename);

        }else{
            $filename = $request->oldpimg;
        }

        $featured = $request->featured;
        if(!empty($featured))
        {
            $plisting->featured = 1;
        }else{
            $plisting->featured = 0;
        }
        $plisting->adtitle = $request->adtitle;
        $plisting->addate = $request->addate;
        $plisting->pinfo = $request->pinfo;
        $plisting->userid = $userid;
        $plisting->rent = $request->rent;
        $plisting->cityid = $request->cityid;
        $plisting->postcode = $request->postcode;
        $plisting->address = $request->address;
        $plisting->propertypeid = $request->propertypeid;
        $plisting->bedroomid = $request->bedroomid;
        $plisting->description = $request->description;
        $plisting->adscostpriceid = $request->adscostpriceid;
        $plisting->latitude = $request->latitude;
        $plisting->longitude = $request->longitude;
        $plisting->pimg = $filename;
        $plisting->isactive = '1';
        $plisting->ispaid = 0;
        $plisting->save();
        return redirect()->back()->with('success', 'Porperty ad added successfully !!!');

    }

     public function propertydel($id)
    {
       $plist =  Propertylisting::findOrFail($id);
       $plist->delete();
       return redirect('admin/propertylist')->with('delete','Property has deleted !');
    }


    // news start here //


    public function newslist()
    {
        if(Auth::check()){
            $res = News::all();
            return view('admin.newslist',compact('res'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');

    }


     public function newsadd()
    {
        if(Auth::check()){
        return view('admin.newsadd');
            }
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    

     public function newsave(Request $request)
    {

        $userid =  Auth::user()->id;
        $filename = '';
        if ($request->hasFile('pimg')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('pimg')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('pimg')->move(public_path() . $destinationPath, $filename);

        }

        $plisting = new News();
        $plisting->title = $request->title;
        $plisting->description = $request->description;
        $plisting->pimg = $filename;
        $plisting->save();
        return redirect()->back()->with('success', 'Content added successfully !!!');

    }


    public function newsedit($newsid)
    {
        if(Auth::check()){
        $res = News::findOrFail($newsid);
        return view('admin.newsedit',compact('res'));
            }
        return redirect("login")->withSuccess('You are not allowed to access');

    }


    public function newsupdate(Request $request,$id)
    {

            $userid =  Auth::user()->id;

        $plisting = News::find($id);

        $filename = '';
        if ($request->hasFile('pimg')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('pimg')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('pimg')->move(public_path() . $destinationPath, $filename);

        }else{
            $filename = $request->oldpimg;
        }

        $plisting->title = $request->title;
        $plisting->description = $request->description;
        $plisting->pimg = $filename;
        $plisting->save();
        return redirect()->back()->with('success', 'Porperty ad added successfully !!!');

    }


     public function newsdel($id)
    {
       $plist =  News::findOrFail($id);
       $plist->delete();
       return redirect('admin/newslist')->with('delete','Property has deleted !');
    }

    


    // city start //



	
	public function citylist()
    {
        if(Auth::check()){
            //$res = City::all();
            $res = DB::table('city')->orderBy('cityname','ASC')->get();
            return view('admin.citylist',compact('res'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');

    }

     public function cityedit(Request $req,$id)
    {
        if(Auth::check()){
        $editres = City::findOrFail($id);
        return view('admin.cityedit',compact('editres'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    
    public function cityadd()
    {
        if(Auth::check()){
        return view('admin.cityadd');
        }
        return redirect("login")->withSuccess('You are not allowed to access');

    }


    public function citystore(Request $request)
    {

        if(Auth::check()){
            $filename = '';
        if ($request->hasFile('pimg')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('pimg')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('pimg')->move(public_path() . $destinationPath, $filename);

        }
        $city = new City();
        $city->cityname = $request->cityname;
        $city->pimg = $filename;
        $city->save();
        return redirect()->back()->with('success', 'Cityadded successfully !!!');
        }
        return redirect("login")->withSuccess('You are not allowed to access');

    }


    public function citydel($id)
    {
       $cartype =  City::findOrFail($id);
       $cartype->delete();
       return redirect('admin/citylist')->with('delete','City has deleted !');
    }





     public function cityupdate(Request $request,$id)
    {
        
        $city = City::find($id);
         $filename = '';
        if ($request->hasFile('pimg')) {
            $destinationPath ='/uploadfile/';
            $extension = $request->file('pimg')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $request->file('pimg')->move(public_path() . $destinationPath, $filename);

        }else{
            $filename = $request->oldpimg;
        }
        $city->cityname = $request->cityname;
        $city->pimg = $filename;
        $city->save();
        return redirect()->back()->with('success', 'City updated successfully !!!');

    }


	// city end //
    //
    public function propertyownerslist()
    {
        if(Auth::check()){
    	$acres = Createownerac::all();
    	return view('admin.propertyownerlist',compact('acres'));
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }






    // user archive start //

    public function userlive($id)
    {
        if(Auth::check()){
        $pownerfind = Createownerac::find($id);
        $pownerfind->isdel = '1';
        $pownerfind->save();
        return redirect()->back()->with('success', 'User moved to live successfully !!!');
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }



    public function userdraft($id)
    {
        if(Auth::check()){
        $pownerfind = Createownerac::find($id);
        $pownerfind->isdel = '1';
        $pownerfind->save();
        return redirect()->back()->with('success', 'User moved to archive successfully !!!');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }


    // user archive end //

    // user verify //
    public function verifyowner($id)
    {
        if(Auth::check()){
        $pownerfind = Createownerac::find($id);
        $pownerfind->isverify = '1';
        $pownerfind->save();
        return redirect()->back()->with('success', 'User Verified successfully !!!');
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }

    public function unverifyowner($id)
    {
        if(Auth::check()){
        $pownerfind = Createownerac::find($id);
        $pownerfind->isverify = '0';
        $pownerfind->save();
        return redirect()->back()->with('success', 'User unverify successfully !!!');
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }

    // user verify end //

    public function setUserDeleteStatus(Request $req)
    {
        $user_id = $req->user_id;
        $status = $req->isdel;
        $user = Createownerac::findOrFail($user_id);
        $user->isdel = $status;
        $save_status = $user->save();
        return json_encode(array('status' => $save_status, 'isdel' => $user->isdel));
    }



    public function powneractive($id)
    {
        if(Auth::check()){
    	$pownerfind = Createownerac::find($id);
    	$pownerfind->status = '1';
    	$pownerfind->save();
        return redirect()->back()->with('success', 'Status updated successfully !!!');
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }	


     public function pownerinactive($id)
    {
    	$pownerfind = Createownerac::find($id);
    	$pownerfind->status = '0';
    	$pownerfind->save();
        return redirect()->back()->with('success', 'Status updated successfully !!!');
    }	



    // ads cost manage //

    public function adcostlist()
    {
        if(Auth::check()){
    	$res = Adcost::all();
    	return view('admin.adcostlist',compact('res'));
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }

      public function adcostedit(Request $req,$id)
    {
        if(Auth::check()){
        $editres = Adcost::findOrFail($id);
        return view('admin.adcostedit',compact('editres'));
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }

    
    public function adcostadd()
    {
        if(Auth::check()){
        return view('admin.adcostadd');
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }


    public function adcoststore(Request $request)
    {

        $adcost = new Adcost();
        $adcost->period = $request->period;
        $adcost->private_std_list_price = $request->private_std_list_price;
        $adcost->private_feature_list_price = $request->private_feature_list_price;
        $adcost->agency_std_list_price = $request->agency_std_list_price;
        $adcost->agency_feature_list_price = $request->agency_feature_list_price;
        $adcost->save();
        return redirect()->back()->with('success', 'Content Added successfully !!!');

    }



    public function adcostupdate(Request $request,$id)
    {
        
        $adcost = Adcost::find($id);
        $adcost->period = $request->period;
        $adcost->private_std_list_price = $request->private_std_list_price;
        $adcost->private_feature_list_price = $request->private_feature_list_price;
        $adcost->agency_std_list_price = $request->agency_std_list_price;
        $adcost->agency_feature_list_price = $request->agency_feature_list_price;
        $adcost->save();
        return redirect()->back()->with('success', 'Adcost updated successfully !!!');

    }


     public function adcostdel($id)
    {
        if(Auth::check()){
       $cartype =  Adcost::findOrFail($id);
       $cartype->delete();
       return redirect('admin/adcostlist')->with('delete','City has deleted !');
        }
        return redirect("login")->withSuccess('Login details are not valid');

    }







}
