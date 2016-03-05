<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>UK SHORTLETS.com</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">

	<!-- CSS Paths -->
	<link href="{{url('/')}}/assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/front/css/stellarnav.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{url('/assets/front/css')}}/select2.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{url('/')}}/assets/front/css/style.css?v=1.02" rel="stylesheet" type="text/css">

	<!-- Owl Carousel Assets -->
	<!--<linkhref="{{url('/')}}/assets/front/js/owl/owl.carousel.css" rel="stylesheet">
	<linkhref="{{url('/')}}/assets/front/js/owl/owl.theme.css" rel="stylesheet">-->
    <link rel="stylesheet"href="{{url('/')}}/assets/front/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"href="{{url('/')}}/assets/front/js/owlcarousel/assets/owl.theme.default.min.css">
	<!-- CSS Paths End -->

	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">	
	
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/purecookie.css">
	<script type="text/javascript" src="{{url('/')}}/assets/front/purecookie.js"></script>
	
  <link rel="shortcut icon" href="{{url('/')}}/assets/front/images/footer-logo-2.jpg" type="image/x-icon">  


	
</head>
<body id="top">

<div class="headerArea">
	<a href="{{url('/')}}"><img src="{{url('/')}}/assets/front/images/logo.svg" alt=""></a>
	<img src="{{url('/')}}/assets/front/images/uk-header-bg.jpg" alt="" class="w-100">
</div>

<!-- <div class="loginBtn">
	<ul>
		<li><a href="index.html">Home <i class="fas fa-home"></i></a></li>
		<li><a href="login.html">Login <i class="fas fa-key"></i></a></li>
		<li><a href="">Favourites <i class="fas fa-heart"></i></a></li>
	</ul>
</div> -->

<div class="navArea" id="myHeader">
	<div>
		<div id="main-nav" class="stellarnav">
			<ul>
				<li><a href="{{url('/')}}">Home</a></li>
				<li><a href="">UK CITIES</a>
					<ul>
						<?php 
						$res = DB::table('city')->orderBy('id','asc')->limit('4')->get();
						foreach($res  as $row) {
						?>
						<li><a href="{{url('/')}}/property/city/{{$row->id}}">{{$row->cityname}} <small></small></a></li>
					<?php } ?>

					<?php 
						$res = DB::table('city')->where('id','>','5')->orderBy('cityname')->get();
						foreach($res  as $row) {
						?>
						<li><a href="{{url('/')}}/property/city/{{$row->id}}">{{$row->cityname}} <small></small></a></li>
					<?php } ?>
					</ul>
				</li>
					
				</li>
				<li><a href="#">PROPERTY TYPE</a>
					<ul>
						<?php 
						$res = DB::table('porpertytypes')->get();
						foreach($res  as $row) {
							$ptypecount = DB::table('propertylisting')->where('propertypeid',$row->id)->count();

						?>
						<li><a href="{{url('/')}}/property/ptype/{{$row->id}}">{{$row->typename}} 
							<?php if(!empty($ptypecount)) { ?>
							<span style="color: red">({{$ptypecount}})</span> 
						<?php } ?>
							<small></small></a></li>
					<?php } ?>
					</ul>
				
				</li>
				<li><a href="{{url('/')}}/createowneraccount">Create Account</a></li>
				<li><a href="{{url('/')}}/adcost">AD COSTS</a></li>
				<li><a href="{{url('/')}}/travelleralert"> Alert Service</a></li>
				<li><a href="{{url('/')}}/buytools">BUY TOOLS</a></li>
				<li><a target="_blank" href="https://www.timeanddate.com/calendar/?year=2017&country=9">CALENDAR</a>
					<ul>
						<li><a target="_blank" href="https://ukshortlets.com/heartAds#">WEATHER</a></li>
						<li><a target="_blank" href="https://www.timeanddate.com/worldclock/">WORLD CLOCK</a></li>
						<li><a target="_blank" href="https://www.xe.com/">CURRENCY RATES</a></li>
						<li><a target="_blank" href="https://ukshortlets.com/heartAds">GOOGLE TRANSLATE</a></li>
					</ul>
				</li>
				<li><a href="{{url('admin/favlist')}}"><i class="fas fa-heart"></i> FAVOURITES</a></li>
				<li><a href="{{url('/')}}/news">NEWS</a></li>

				<?php
				if(Auth::check()){
				?>
				<li><a href="{{url('/')}}/admin/dashboard">My Account</a></li>
				<li><a href="{{route('signout')}}">Sign Out</a></li>

				<?php }  else {   ?> 

				<li><a href="{{url('/')}}/login">Login</a></li>

				<?php } ?>
			</ul>
		</div>
	</div>
</div>
