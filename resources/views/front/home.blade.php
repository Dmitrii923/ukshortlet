@include('front/include/header')


<?php if(!empty($locations)) { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCYnMnyxl0164ihM4255bIssX40GSbLyTQ"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
	<style type="text/css">
		#mymap {
			border:1px solid red;
			width: 100%;
			height: 500px;
		}
	</style>
<?php } ?>

<div class="midArea">
	<div class="container">

		<div class="quickSearchArea">
			<form name="" method="post" action="{{url('/')}}/quicksearch">
				@csrf
				<div class="row">
					<div class="col-sm-12 col-md"><h3>QUICK SEARCH</h3></div>
					<div class="col-sm-6 col-md">
						<div class="form-group">
							<i class="fas fa-sort-down"></i>
							<select class="form-control" name="cityid" id="search_cityid" required>
								<option value="">SELECT LOCATION</option>
								@foreach($cityres as $cityrow)
								<option value="{{$cityrow->id}}"><span>{{$cityrow->cityname}}</span></option>
								@endforeach

							</select>
						</div>
					</div>
					<div class="col-sm-6 col-md">
						<div class="form-group">
							<i class="fas fa-sort-down"></i>
							<select class="form-control" id="search_porpertytypeid" name="porpertytypeid">
								<option value=""> SELECT ACCOMMODATION TYPE</option>
								<?php 
								$res = DB::table('porpertytypes')->get();
								foreach($res  as $row) {
									?>
									<option value="{{$row->id}}">{{$row->typename}}</option>
								<?php } ?>

							</select>
						</div>
					</div>
					<div class="col-sm-6 col-md">
						<div class="form-group">
							<i class="fas fa-sort-down"></i>
							<select class="form-control" name="nightpriceid" id="search_nightpriceid">
								<option>SELECT PRICE RANGE</option>
								<?php 
								$res = DB::table('nightprice')->get();
								foreach($res  as $row) {
									?>
									<option value="{{$row->id}}">{{$row->pricetag}}</option>
								<?php } ?>

							</select>
						</div>
					</div>
					<div class="col-sm-6 col-md">
						<div>
							<button class="btn" type="submit">
								<i class="fa fa-search"></i>Search Now
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>

		<h2>WELCOME TO UK SHORTLETS.com</h2>
		<p>UK Shortlets.com is a new introductory platform specialising in Shortlet accommodation within the UK. We enable those seeking temporary holiday or shortlet accommodation to contact shortlet Property Owners directly via their private property listing, or via their appointed Agent, who endeavour to offer a far more versatile and Private solution to hotel accommodation, within any one of the any UK Locations we currently cover.</p>
		<p>Shortlet Owners or their appointed Agents, simply need to Create an Account to profile and list their Property, whilst Travellers can search listings using the dropdown menus above, or Quick Search facility below or enrol in the Alert Service above to get latest available Properties.</p>
		
		<h3>UK LOCATIONS</h3>		
		<div class="carouselArea locationCarousel">
			<div id="owl-demo1" class="owl-carousel owl-theme mb-2">
				@foreach($cityres as $cityrow)
				<div class="item">
					<a class="a-uk-city" role="{{ $cityrow->id }}">
						<img src="{{url('/public/uploadfile').'/'.$cityrow->pimg}}" alt="" class="w-100">
					</a>
					<h4>{{$cityrow->cityname}}</h4>
				</div>
				@endforeach
			</div>
			<a class="start"><i class="lni lni-play"></i></a><a class="stop"><i class="lni lni-pause"></i></a> 
		</div>


		<h3 class="pb-0 featured-title">FEATURED PROPERTIES</h3>
		<div class="carouselArea mb-4">
			<div id="owl-demo2" class="owl-carousel owl-theme mb-2">
				<?php 
				if(!empty(Auth::user()->id))
				{
					$userid =  Auth::user()->id; 
				}
				?>

				@foreach($propres as $prow)
				<div class="item">
					<div>
						<a href="{{url('/')}}/property/details/{{$prow->id}}">
							<img src="{{url('/')}}/public/uploadfile/{{$prow->pimg}}" alt="">
						</a>
						<h4 class="favorite-h4">
							<span class="favorite-span">Click to view Property</span> 
							<?php 
							if(!empty(Auth::user()->id))
							{
								$res = DB::table('favourite')->where('userid',$userid)->where('propertyid',$prow->id)->first();
								if(!empty($res->id)){
							?>
								<i class="fas fa-check"></i>
						</h4>
							<?php  
								} else { 
							?>
								<a href="{{url('/')}}/addfav/{{$prow->id}}" data-toggle="tooltip" title="&#10003; 
									Save to favourite">
									<i class="fas fa-heart"></i>
								</a>
							<?php 
								}  
							} else {  
							?>
								<a class="favorite-tooltip" data-toggle="tooltip" title="&#10003; 
									Save to favourite">
									<i class="fas fa-heart"></i>
								</a>
						</h4>
							<?php }   ?>
					</div>
				</div>
				@endforeach
			</div>
			<a class="play"><i class="lni lni-play"></i></a><a class="pause"><i class="lni lni-pause"></i></a>
		</div>
		<?php if(!empty($locations)) { ?>
			<script>
				function initMap() {
					var map;
					var bounds = new google.maps.LatLngBounds();
					var mapOptions = {
						mapTypeId: 'roadmap'
					};

				    // Display a map on the web page
				    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
				    map.setTilt(50);

				    // Multiple markers location, latitude, and longitude
				    var markers = [
				    <?php 
				    	foreach($locations as $locationrow){
				    		echo '["'.$locationrow->adtitle.'", '.$locationrow->latitude.', '.$locationrow->longitude.'],';
				    	}
				    
				    ?>
				    ];

				    // Info window content
				    var infoWindowContent = [
				    <?php
				    	foreach($locations as $locationrow){?>
				    		['<div class="info_content">' +
				    		'<h3><?php echo $locationrow->adtitle; ?></h3>' +
				    		'<p><?php echo $locationrow->address; ?></p>' + '<p>Rent: ??<?php echo $locationrow->rent; ?></p>'+'</div>'],
				    	<?php }
				    
				    ?>
				    ];

				    // Add multiple markers to map
				    var infoWindow = new google.maps.InfoWindow(), marker, i;
				    
				    // Place each marker on the map  
				    for( i = 0; i < markers.length; i++ ) {
				    	var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
				    	bounds.extend(position);
				    	marker = new google.maps.Marker({
				    		position: position,
				    		map: map,
				    		title: markers[i][0]
				    	});

				        // Add info window to marker    
				        google.maps.event.addListener(marker, 'click', (function(marker, i) {
				        	return function() {
				        		infoWindow.setContent(infoWindowContent[i][0]);
				        		infoWindow.open(map, marker);
				        	}
				        })(marker, i));

				        // Center the map to fit all markers on the screen
				        map.fitBounds(bounds);
				    }

				    // Set zoom level
				    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
				    	this.setZoom(14);
				    	google.maps.event.removeListener(boundsListener);
				    });
    
				}

				// Load initialize function
			google.maps.event.addDomListener(window, 'load', initMap);
		</script>


		<div id="mapCanvas"></div>
		<style type="text/css">
			#mapCanvas {
			    width: 100%;
			    height: 650px;
			}
		</style>

	<?php }else{  ?>

		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4030920.5176250646!2d-3.7435807187499996!3d54.598572932477964!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1613565239155!5m2!1sen!2sus&z=15" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<?php } ?>

	</div>
</div>
@include('front/include/footer')