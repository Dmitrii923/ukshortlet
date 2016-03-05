@include('front.include.header')

<div class="midArea innerArea">
	<div class="container">
		
		
		
		<h1 class="mb-4">CREATE AN ACCOUNT</h1>
		<div class="text-center mb-5">
			<p><B>Before you can place an advert for your Shortlet Property, or Buy Tools or Save Favourites, you need to Create a Private Account by completing  the form below.</B></p>
			<br>
			<p>*The email address you use will be the one replies to your Ad go to.</p>
			<p>* If you are looking to Rent a Shortlet Property, start your search by clicking on the 'UK Cities', above</p>
		</div>
		
		
	@if(Session::has('success'))
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif

		
		<div class="contactBox">

			  @if(Session::has('err'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('err')}}</strong>
                        </div>
                    @endif
		
			<form method="post" action="{{url('/')}}/creteaccountsubmit" enctype="multipart/form-data">
				@csrf
				<h4>PERSONAL DETAILS</h4>
				<input type="hidden" name="latitude" id="lat">
            	<input type="hidden" name="longitude" id="long">
				<div class="row">
					<div class="col-sm-3">Title:</div>
					<div class="col-sm-9">
						<select name="title" class="form-control">
							<option default="">-- Select One --</option>
							<option value="Mr">Mr</option>
							<option value="Mrs">Mrs</option>
							<option value="Miss">Miss</option>
							<option value="Ms">Ms</option>
						</select>
					</div>
				
					<div class="col-sm-3"> Name:</div><div class="col-sm-9"><input type="text"  onkeyup="getLocation()" name="name" class="form-control" required></div>
					<div class="col-sm-3">Email Address:</div><div class="col-sm-9"><input type="email" name="email" class="form-control" required></div>
					<div class="col-sm-3">Telephone Number:</div><div class="col-sm-9"><input type="text" name="mobile" class="form-control"></div>
					<div class="col-sm-3">Are you a:</div>

					<div class="col-sm-9">
						<input type="radio" name="ownertype" value="Private Owner"><b>Private Owner</b>
						<input type="radio" name="ownertype" value="Agency"><b>Agency </b>
						<input type="radio" name="ownertype" value="Buyer"><b>Site Visitor</b>
					</div>

					<p><strong>NB. Private Owners & Agents will need to upload proof of Ownership such as a current Utility bill to help prevent fraud.</strong></p>


					<div class="col-sm-12">
						<label><b>Upload File:</b></label>
						<input type="file" name="uploadfile" >
					</div>

				</div>
				<br><h4>SET A PASSWORD</h4>
				<div class="row">
					<div class="col-sm-3">Password:</div><div class="col-sm-9"><input type="password" name="password" class="form-control" required></div>
					<div class="col-sm-3">Confirm Password:</div><div class="col-sm-9"><input type="password" class="form-control" required>
					</div>
					<div class="col-sm-3"></div>
					<div class="col-sm-9">
						<img src="images/captcha.png" alt="" class="img-fluid"></div>
						<div class="col-sm-3"></div><div class="col-sm-9"><input type="submit" value="Submit" class="btn"></div>
					</div>
				</form>	
			</div>
			

			
		</div>
	</div>



<div id="mapholder"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

function showPosition(position)
  {
  var lat=position.coords.latitude;
  var lon=position.coords.longitude;

  document.getElementById("lat").value = lat;
  document.getElementById("long").value = lon;

//  alert(lat);
  //alert(lon);
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  mapholder.style.height='250px';
  mapholder.style.width='100%';

  var myOptions={
  center:latlon,zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }
</script>



	@include('front.include.footer')




