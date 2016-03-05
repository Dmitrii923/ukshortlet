<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Createownerac;
use App\Models\Adcost;
use App\Models\Alerservice;
use App\Models\Propertylisting;
use App\Models\Featureserviceprovider;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use App\Models\Bedroom;
use App\Models\News;
use Twilio\Rest\Client;
use Hash;
use DB;
use AmrShawky\LaravelCurrency\Facade\Currency;


class Frontcontroller extends Controller
{
    //


    public function sendemail()
    {
        $to = "techsj04@gmail.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: noreply@ukshortlet.com";
        mail($to,$subject,$txt,$headers);
    }

    public function reviewpost(Request $req)
    {
        if(!empty($req->name))
        {
            $currenturl = $req->currenturl;
            $data = array(
                'name' => $req->name,
                'email' => $req->email,
                'msg' => $req->msg,
                'phone' => $req->phone,
                'propid' => $req->propid,
                'rating' => $req->rating,
                'status' => 0
            );
            DB::table('review')->insert($data);
            return redirect($currenturl)->with('success','Your review has  been posted successfully.');

        }
    }

    public function emailadpost(Request $req)
    {
        if(!empty($req->name))
        {
            $currenturl = $req->currenturl;
            $data = array(
                'name' => $req->name,
                'email' => $req->email,
                'msg' => $req->msg,
                'phone' => $req->phone,
                'subject' => $req->subject
            );
            DB::table('emailads')->insert($data);
            return redirect($currenturl)->with('success','Your Query has  been posted successfully.');

        }
    }

    public function emailads()
    {
        return view('front/emailads');
    }


    public function sendsms()
    {
        $receiverNumber = "+447444362041";
        $message = "This is testing from ukshortlet.com";

        try {

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }


    public function home()
    {
        $currency = Currency::convert()->from('XMR')->to('EUR')->get();
        dd($currency);
        $default_city_arr = ['LONDON', 'OXFORD', 'CAMBRIDGE', 'EDINBURGH'];
        $cityres = City::getOrderCities($default_city_arr);
        $propres = Propertylisting::where('isarchive','1')->get();
        $roomres = Bedroom::all();
        $locations = array();
        return view('front/home',compact('cityres','propres','roomres'));

    }


    public function quicksearch(Request $req)
    {

        if(!empty($req->cityid))
        {
            $cityid = $req->cityid;
            $porpertytypeid = $req->porpertytypeid;
            $nightpriceid = $req->nightpriceid;

            $locations = DB::table('propertylisting')->where('cityid',$cityid)->where('nightpriceid',$nightpriceid)->get();
            $cityres = City::all();
            $propres = Propertylisting::all();
            $roomres = Bedroom::all();
            //$locations = array();
            return view('front/home',compact('cityres','propres','roomres','locations'));

        }
    }


    public function buytools()
    {
        $res = DB::table('buytools')->get();
        return view('front/buytools',compact('res'));
    }


    // tool buy start //

    public function toolbuy($toolid)
    {

        if(Auth::check()){
           $role =  Auth::user()->role;
           $userid =  Auth::user()->id;
           $toolres = DB::table('buytools')->where('id',$toolid)->get();
           return view('front.buytoolpayment',compact('toolres'));
       }else{
        return redirect("login")->withSuccess('You are not allowed to access');
        }

    }



    public function toolbuysuccess(Request $request)
    {

        if($request->st == 'Completed')
        {
                //update
            $toolid = $request->item_name;
            $userid =  Auth::user()->id;
            $data = array(
                'userid' => $userid,
                'toolid' => $toolid,
                'order_status'=>'Completed' ,
                'transaction_id'=>$request->tx
            );
            DB::table('buytoolpayment')->insert($data);
            return redirect('/buytools')->with('success','Your Payment has paid successfully.');

        }  else
        {
            return redirect(route('home'))->with('error_paid','Payment Fails!! Try Again..');
        }
    }


    public function toolbuycancel()
    {
        return redirect(route('/buytools'))->with('error_cancel','Payment Cancel..');

    }




    // tool buy end //

    public function addfav($propertyid)
    {

        if(Auth::check()){
           $role =  Auth::user()->role;
           $userid =  Auth::user()->id;

           $data = array(
            'propertyid' => $propertyid,
            'userid' => $userid
        );
           DB::table('favourite')->insert($data);
           return redirect('');
       }else{
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    }


    public function contact()
    {
        return view('front/contact');
    }


    public function termscondition()
    {
        return view('front/termscondition');
    }

    public function privacypolicy()
    {
        return view('front/privacypolicy');
    }


    public function cookie()
    {
        return view('front/cookie');
    }


    public function advertise()
    {
        return view('front/advertise');
    }

    public function citywiseproperty($cityid)
    {
        $city = City::findOrFail($cityid);
        $featured_services = Featureserviceprovider::limit(12)->get();
        $pres = $city->getPropertiesList()->paginate(25);
        $type_id = 0;
        $ptypename = DB::table('city')->where('id',$cityid)->first();
        return view('front/allproplist',compact('pres','ptypename', 'featured_services', 'type_id'));
    }


    public function cmspg($slug)
    {
        $pres = DB::table('pages')->where('slug',$slug)->get();
        return view('front/cmspg',compact('pres'));
    }



    public function ptypewisecity($ptypeid)
    {
        $pres = Propertylisting::where('propertypeid',$ptypeid)->where('isarchive','1')->paginate(25);
        $ptypename = DB::table('porpertytypes')->where('id',$ptypeid)->first();
        return view('front/typewiseproprty',compact('pres','ptypename'));

    }


    public function news()
    {
        $newrses = News::all();
        return view('front/news',compact('newrses'));

    }

    public function newsdetails($id)
    {
        $pres = News::where('id',$id)->get();
        return view('front/newsdetails',compact('pres'));
    }




    public function propdetails($propid)
    {
        $pres = Propertylisting::where('id',$propid)->get();

        $reviews = DB::table('review')->where('propid',$propid)->where('status','1')->orderBy('id','desc')->get();
        return view('front/propdetails',compact('pres','reviews'));

    }

    public function createowneraccount()
    {
       return view('front.createowneraccount');
    }

    public function adcost()
    {
        $res = Adcost::all();
        return view('front.adcost',compact('res'));
    }

    public function travelleralert()
    {
        return view('front.travelleralert');
    }

    public function travelleralertsubmit(Request $req)
    {

        $createac = new Alerservice();
        $createac->serviceid = $req->serviceid;
        $createac->cityid = $req->cityid;
        $createac->email = $req->email;
        $createac->phone = $req->phone;
        $createac->optionval = $req->optionval;
        $createac->duration = $req->duration;
        $createac->total = $req->totalval;

        $createac->latitude = $req->latitude;
        $createac->longitude = $req->longitude;

        $createac->save();
    //        return redirect('/travelleralert')->with('success','Your Alert request has submitted successfully.');

        $totalval = $createac->total;

        $order_id = $createac->id;

        return view('front.payment',compact('totalval','order_id'));
    }
    public function paypal_save(Request $request)
    {

        if($request->st == 'Completed')
        {
                //update
            $order_id = $request->item_name;
            Alerservice::where('id',$order_id)->update([
             'order_status'=>'Completed' ,
             'transaction_id'=>$request->tx
         ]);
    //        return redirect(route('home'))->with('error_paid','Payment Fails!! Try Again..');
            return redirect('/travelleralert')->with('success','Your Alert request has submitted successfully.');


        }  else
        {
            return redirect(route('home'))->with('error_paid','Payment Fails!! Try Again..');
        }
    }

    public function cancel_return()
    {
        return redirect(route('home'))->with('error_cancel','Payment Cancel..');

    }
    public function securelogin()
    {
        return view('front/securelogin');

    }


    public function verification($encode)
    {
        $decode = base64_decode($encode);
        $res = Createownerac::where('randomno',$decode)->first();
        if(!empty($res))
        {
            $userid = $res->id;
            $createac = Createownerac::find($userid);
            $createac->status = '1';
            $createac->save();
            return redirect('/verifysuccess')->with('success','Your Email id has verified successfully.');
        }else{
            return redirect('/');
        }
    }




    public function verifysuccess()
    {
        return view('front.verifysuccess');

    }



    public function creteaccountsubmit(Request $req)
    {
        $res = Createownerac::where('email',$req->email)->first();
        if(!empty($res))
        {
            return redirect("createowneraccount")->with('err','Email id already exists');

        }


        $filename = '';
        if ($req->hasFile('uploadfile')) {
            $destinationPath ='/uploadfile/';
            $extension = $req->file('uploadfile')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $req->file('uploadfile')->move(public_path() . $destinationPath, $filename);

        }

        $six_digit_random_number = random_int(100000, 999999);
        $encodeno = base64_encode($six_digit_random_number);
        $verifylink = url('/')."/verification/".$encodeno;

        $password = Hash::make($req->password);
        $createac = new Createownerac();
        $createac->title = $req->title;
        $createac->ownertype = $req->ownertype;

        $ownertype = $req->ownertype;

        if($ownertype=="Buyer")
        {

            $createac->role = "Buyer";

        }else{

            $createac->role = "Vendor";

        }

        $createac->uploadfile = $filename;
        $createac->name = $req->name;
        $createac->email = $req->email;
        $createac->mobile = $req->mobile;
        $createac->latitude = $req->latitude;
        $createac->longitude = $req->longitude;
        $createac->status = '0';
        $createac->isverify = '0';
        $createac->isdel = '0';
        $createac->password = $password;
        $createac->randomno = $six_digit_random_number;
        $createac->verifylink = $verifylink;
        $createac->save();

        $owneremail = trim($req->email);

        $to = $owneremail;
        $subject = "Account Verification Email Ukshortlet";
        $txt = "Click here to verify your account ".$verifylink;
        $headers = "From: noreply@ukshortlet.com";
        mail($to,$subject,$txt,$headers);


        return redirect('/createowneraccount')->with('success','Your account has  created to activate it please verify email.');
    }

    public function getCityFeatures(Request $req, $city_id)
    {
        $city = City::findOrFail($city_id);
        $user_id = -1;
        if(!empty(Auth::user()->id))
        {
            $userid =  Auth::user()->id; 
        }
        $featured_properties = $city->getFeaturedProperties();
        $features = array();
        foreach($featured_properties as $fp)
        {
            $favorite = 0;
            if($user_id == -1)
            {
                $favorite = 0;
            }else{
                $favorite = $fp->getUserFavorite($user_id);
            }
            $efp = array(
                'id' => $fp->id,
                'user_id' => $user_id,
                'image' => $fp->pimg,
                'title' => $fp->adtitle,
                'favorite' => $favorite
            );
            array_push($features, $efp);
        }
        return json_encode(array('features' => $features, 'city_name' => $city->cityname));
    }

}
