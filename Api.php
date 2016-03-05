<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Api extends CI_Controller {



	public function __construct()

	{

		parent::__construct();

		$this->load->library('email');

	}





	public function index()

	{

		echo "Felon";

	}



	// user register functionaltiy //
	public function userregister()
	{
		
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$mobile = $this->input->post('mobile');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$pin = $this->input->post('pin');
		$address = $this->input->post('address');

		//$otp = random_int(100000, 999999);
		$otp = "123456";

		$chkphone = $this->db->query("select * from capp_customer where mobile='".$mobile."'")->result_array();
		if(!empty($chkphone))
		{
			$array = array(
				'msg'  => ' Mobile number already exists'
			);
			echo json_encode($array, true);
		}else{
			$data = array(
				'mobile' => $mobile,
				'name' => $name,
				'email' => $email,
				'pin' => $pin,
				'address' => $address,
				'otp' =>$otp
			);
			$this->db->insert('capp_customer',$data);
			$lastuserid = $this->db->insert_id();
			$array = array(
				'success'  => true,
				'otp' =>$otp,
				'userid' =>$lastuserid
			);
			echo json_encode($array, true);
		}
		
	}

	// user login //

	public function userlogin()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$mobile = trim($this->input->post('mobile'));
		$chkotp = $this->db->query("select * from capp_customer where mobile='".$mobile."' ")->result_array();
		if(!empty($chkotp[0]['id']))
		{
			if($chkotp[0]['status']=='1')
			{
				$exotpis = $chkotp[0]['otp'];
				$userid = $chkotp[0]['id'];
				$array = array(
					'msg'  => 'success',
					'userid'  => $userid,
					'otp' => $exotpis
				);
				echo json_encode($array, true);
			}else{
				$array = array(
				'msg'  => 'Mobile number not verified'
				);
				echo json_encode($array, true);
			}
		}else{

			$array = array(
				'msg'  => 'Mobile number does not exist'
			);
			echo json_encode($array, true);
		}

	}

	// login otp verification //
	public function loginotpverification()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$userid = $this->input->post('userid');
		$postotp = $this->input->post('otp');
		$chkotp = $this->db->query("select * from capp_customer where id='".$userid."' and otp='".$postotp."'")->result_array();
		if(!empty($chkotp))
		{ 
			$exotpis = $chkotp[0]['otp'];
			$userid = $chkotp[0]['id'];
			$name = $chkotp[0]['name'];
			$email = $chkotp[0]['email'];
			if($exotpis==$postotp)
			{
				
				$array = array(
					'msg'  => 'success',
					'name' =>$name,
					'userid' =>$userid,
					'email' =>$email
				);
				echo json_encode($array, true);
			}else{
				
				$array = array(
					'msg'  => 'Wrong otp..Try again'
				);
				echo json_encode($array, true);
			}

		}else{
				$array = array(
					'msg'  => 'Wrong otp..Try again'
				);
				echo json_encode($array, true);
			}

	}



	// otp verify //
	public function otpverification()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$userid = $this->input->post('userid');
		$postotp = $this->input->post('otp');
		$chkotp = $this->db->query("select * from capp_customer where id='".$userid."'")->result_array();
		if(!empty($chkotp))
		{
			$exotpis = $chkotp[0]['otp'];
			if($exotpis==$postotp)
			{
				$data = array(
					'status' => 1
				);
				$this->db->where('id',$userid);
				$this->db->update('capp_customer',$data);
				$array = array(
					'msg'  => 'success'
				);
				echo json_encode($array, true);
			}else{
				$array = array(
					'msg'  => 'Wrong otp..Try again'
				);
				echo json_encode($array, true);
			}

		}

	}

	// banner image //
	public function hompgbannerlist()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$dres = $this->db->query("select * from homepgbanner order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'bannerimg' => $drows['bannerimg']
				);
			}
			echo json_encode(['success'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['success'=>false], true);
		}
	}



	// all pin code list //
	public function getpincode()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$dres = $this->db->query("select * from allpincode order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'pincode' => $drows['pincode'],
					'charge' => $drows['charge']
				);
			}
			echo json_encode(['success'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['success'=>false], true);
		}
	}


	// product main category //
	public function maincatlist()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/catimg/";
		$dres = $this->db->query("select * from product_category order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'product_category' => $drows['product_category'],
					'image' => $imgurl.$drows['image']
				);
			}
			echo json_encode(['success'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['success'=>false], true);
		}
	}


	// special item //
	public function specialitemlist()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$dres = $this->db->query("select * from product_sub_category order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'subcatname' => $drows['subcatname'],
					'image' => $imgurl.$drows['image']
				);
			}
			echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}
	}


	// hot item //
	public function homepgitemlist()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$hotitemarray = array();
		$fitemarray = array();
		$spclitemarray = array();
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$hres = $this->db->query("select * from product where ishot='1' order by id desc ")->result_array();
		if(!empty($hres))
		{
			foreach($hres as $drows)
			{
				$hotitemarray[]=array(
					'id' => $drows['id'],
					'productname' => $drows['productname'],
					'pdesc' => $drows['pdesc'],
					'showstatus' => $drows['showstatus'],
					'offerprice' => $drows['otherourprice'],
					'normalprice' => $drows['othermarketprice'],
					'otherunit' => $drows['otherunit'],
					'delstatus' => $drows['delstatus'],
					'image' => $imgurl.$drows['image']
				);
			}
			//echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}

		//featured item //
		$fres = $this->db->query("select * from product where isfeatured='1' order by id desc ")->result_array();
		if(!empty($fres))
		{
			foreach($fres as $drows)
			{
				$fitemarray[]=array(
					'id' => $drows['id'],
					'productname' => $drows['productname'],
					'pdesc' => $drows['pdesc'],
					'showstatus' => $drows['showstatus'],
					'offerprice' => $drows['otherourprice'],
					'normalprice' => $drows['othermarketprice'],
					'otherunit' => $drows['otherunit'],
					'delstatus' => $drows['delstatus'],
					'image' => $imgurl.$drows['image']
				);
			}
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}


		$specialres = $this->db->query("select * from product_sub_category order by id desc ")->result_array();
		if(!empty($specialres))
		{
			foreach($specialres as $drows)
			{
				$spclitemarray[]=array(
					'id' => $drows['id'],
					'subcatname' => $drows['subcatname'],
					'image' => $imgurl.$drows['image']
				);
			}
			
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}

		//output //

		echo json_encode(['msg'=>true, 'specialitem'=> $spclitemarray,'featureditem' =>$fitemarray,'hotitem'=> $hotitemarray], true);

	}

	// Featured item //
	public function featureditemlist()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$dres = $this->db->query("select * from product where isfeatured='1' order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'productname' => $drows['productname'],
					'pdesc' => $drows['pdesc'],
					'showstatus' => $drows['showstatus'],
					'offerprice' => $drows['otherourprice'],
					'normalprice' => $drows['othermarketprice'],
					'otherunit' => $drows['otherunit'],
					'delstatus' => $drows['delstatus'],
					'image' => $imgurl.$drows['image']
				);
			}
			echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}
	}




	// product sub category //
	public function subcatlist()
	{

		  //echo meta('Content-type', 'text/html; charset='.config_item('charset'), 'equiv');
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$maincatid = $this->input->post('maincatid');
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$dres = $this->db->query("select * from product_sub_category where maincatid='".$maincatid."' order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'maincatid' => $drows['maincatid'],
					'subcatname' => $drows['subcatname'],   
					'image' => $imgurl.$drows['image']
				);
			}
			

			echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}
	}

	// product list //
	public function productlist()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$variation = array();
		$catid = $this->input->post('catid');
		$subcatid = $this->input->post('subcatid');
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$dres = $this->db->query("select * from product where catid='".$catid."' and subcatid='".$subcatid."' order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{   
				$pmainid = $drows['id'];
				$pchildres = $this->db->query("select * from productchild where pid='$pmainid'")->result_array();
				if(!empty($pchildres))
				{

					foreach($pchildres as $pchildrow)
					{

						$variation[] = array(

							'productchildid' => $pchildrow['id'],
							'pid' => $pchildrow['pid'],
							'marketprice' => $pchildrow['marketprice'],
							'ourprice' => $pchildrow['ourprice'],
							'container' => $pchildrow['container'],
							'unit' => $pchildrow['unit']
						);

					}
				}


				$array[]=array(
					'productmainid' => $drows['id'],
					'productname' => $drows['productname'],
					'pdesc' => $drows['pdesc'],
					'isfeatured' => $drows['isfeatured'],
					'ishot' => $drows['ishot'],
					'showstatus' => $drows['showstatus'],
					'offerprice' => $drows['otherourprice'],
					'normalprice' => $drows['othermarketprice'],
					'otherunit' => $drows['otherunit'],
					'delstatus' => $drows['delstatus'],
					'variation' => $variation,
					'image' => $imgurl.$drows['image']
				);
			}
			echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}
	}



	// product list //
	public function productdetails()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$productid = $this->input->post('productid');
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$dres = $this->db->query("select * from product where id='".$productid."' order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'productname' => $drows['productname'],
					'pdesc' => $drows['pdesc'],
					'isfeatured' => $drows['isfeatured'],
					'ishot' => $drows['ishot'],
					'showstatus' => $drows['showstatus'],
					'offerprice' => $drows['otherourprice'],
					'normalprice' => $drows['othermarketprice'],
					'otherunit' => $drows['otherunit'],
					'delstatus' => $drows['delstatus'],
					'image' => $imgurl.$drows['image']
				);
			}
			echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}
	}


	// product variation details //
	public function productvariationdetails()
	{
		$_POST = json_decode(file_get_contents("php://input"), true); 
		$array = array();
		$productid = $this->input->post('productid');
		$imgurl="https://www.machevaate.com/shopap/admin-cp/pages/image/";
		$dres = $this->db->query("select * from productchild where pid='".$productid."' order by id desc ")->result_array();
		if(!empty($dres))
		{
			foreach($dres as $drows)
			{
				$array[]=array(
					'id' => $drows['id'],
					'pid' => $drows['pid'],
					'marketprice' => $drows['marketprice'],
					'ourprice' => $drows['ourprice'],
					'container' => $drows['container'],
					'unit' => $drows['unit']
				);
			}
			echo json_encode(['msg'=>true, 'res'=> $array], true);
		} else {
			echo json_encode(['msg'=>'No data found'], true);
		}
	}

























}