

@include('front.include.header')


<div class="midArea innerArea">




	<div class="container">
		@if(Session::has('success'))
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif



		<h1 class="mb-4">ALERT SERVICE</h1>
		<div class="text-center mb-5">
			<p>If you are looking for accommodation but too busy to search the site everyday, we can do the searching for you.</p>
			<p>Simply fill in your requirements and Contact details below and then decide how many weeks you would like us to send you Alerts, being anything from 1 to 4 weeks.</p>
		</div>

		<div class="contactBox">
			<form action="{{url('/')}}/travelleralertsubmit" method="post">
				@csrf
				<h4>SIMPLY FILL IN YOUR REQUIREMENTS</h4>
				<input type="hidden" name="latitude" id="lat">
            	<input type="hidden" name="longitude" id="long">
				<div class="row">
					<div class="col-sm-3">I'm looking for a:</div>
					<div class="col-sm-9">
						<select class="form-control" name="serviceid" required>
							<option default="">-- Select Property --</option>
							<?php
						$res = DB::table('porpertytypes')->get();
						foreach($res  as $row) {
						?>
							<option value="{{$row->id}}">{{$row->typename}}</option>
							<?php } ?>

						</select>
		           </div>
					<div class="col-sm-3">In Which City?:</div>
					<div class="col-sm-9">
					<select class="form-control" name="cityid" required>
	                    <option default="">-- Select City --</option>
	                    <?php
						$res = DB::table('city')->get();
						foreach($res  as $row) {
						?>
	                          <option value="{{$row->id}} ">{{$row->cityname}} </option>
	                          <?php } ?>

	                    </select>
                    </div>
					<div class="col-sm-3">My Email Address:</div><div class="col-sm-9">
						<input type="email" class="form-control" name="email" required>
					</div>

					<div class="col-sm-3">My Phone Number:</div><div class="col-sm-9">
						<input type="text" class="form-control" name="phone" required  onkeyup="getLocation()">
					</div>

					<div class="col-sm-3">Option 1:</div>
					<div class="col-sm-9">
						<input name="optionval" type="radio" value="nosms" id="nosms"> <strong>WEEKLY EMAIL ALERT</strong><br>
						<!-- <input name="duration" type="radio"> <strong>7 DAY @ £10.00</strong><br>
						<input name="duration" type="radio"> <strong>14 DAY @ £15.00</strong><br>
						<input name="duration" type="radio"> <strong>21 DAY @ £20.00</strong><br>
						<input name="duration" type="radio"> <strong>28 DAY @ £25.00</strong> -->
					</div>
						<br>
					<div class="col-sm-3">Option 2:</div>
						<div class="col-sm-9">
						<input name="optionval" type="radio" value="withsms" id="withsms"> <strong>WEEKLY EMAIL ALERT + DAILY TEXT ALERTS</strong>
					</div>
						<br>
						<div class="col-sm-12">
						<small>* Select Option 2 if your requirements are urgent.</small>
						</div>
							<div class="col-sm-3">Select Alert Duration:</div>
							<div class="col-sm-9" id="nosmschart" style="display: none;">
								<input name="duration" type="radio" value="07_10" class="totalvalue"> <strong>7 DAY @ £10.00</strong><br>
								<input name="duration" type="radio" value="14_15" class="totalvalue"> <strong>14 DAY @ £15.00</strong><br>
								<input name="duration" type="radio" value="21_20" class="totalvalue"> <strong>21 DAY @ £20.00</strong><br>
								<input name="duration" type="radio" value="28_25" class="totalvalue"> <strong>28 DAY @ £25.00</strong>
							</div>

					<div class="col-sm-9" id="withsmschart" style="display: none;">
						<input name="duration" type="radio" value="07_15" class="totalvalue"> <strong>7 DAY @ £15.00</strong><br>
						<input name="duration" type="radio" value="14_30" class="totalvalue"> <strong>14 DAY @ £30.00</strong><br>
						<input name="duration" type="radio" value="14_30" class="totalvalue"> <strong>21 DAY @ £45.00</strong><br>
						<input name="duration" type="radio"  value="28_60" class="totalvalue"> <strong>28 DAY @ £60.00</strong>
					</div>

				</div>
				<br><h4>YOUR SELECTION</h4>
				<div class="row">
					<div class="col-sm-6"></div><div class="col-sm-3"><strong>Total:<span id="total_val"></span> </strong></div>
                    <input type="hidden" name="totalval" id="totalval">
					<div class="col-sm-3 text-right"><input type="submit" value="Submit" class="btn"></div>
				</div>
			</form>
		</div>



	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
    $("input[name=optionval]").on( "change", function() {
         var optionval = $(this).val();
         if(optionval=="nosms")
         {
         	$("#nosmschart").show();
         	$("#withsmschart").hide();
         }else if(optionval=="withsms")
         {
         	$("#nosmschart").hide();
         	$("#withsmschart").show();
         }

    } );


    $('.totalvalue').on('click',function (){

       let duration = $(this).val();

      let a = $('#total_val').html('  £ '+duration.substring(3,5));
$('#totalval').val(duration.substring(3,5))
    })

});

</script>


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



