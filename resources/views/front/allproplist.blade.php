@include('front.include.header')

<?php 
if(!empty(Auth::user()->id))
{
	$userid =  Auth::user()->id; 
}
?>


<div class="midArea innerArea">
	<div class="container">
		<div class="contentArea">
			<div class="row mb-4">
				<h1 class="col-md-3 text-sm-left" >{{$ptypename->cityname}}</h1>
				<h1 class="col-md-6">FEATURED PROPERTIES</h1>
			</div>
			
			
			<div class="row resultFormArea">
				<div class="col-sm text-sm-left"><span>Showing (<strong>25 Result</strong>)</span></div>
				<div class="col-sm text-sm-right">
					<form action="" method="get">
						<select name="numberofresult">
							<option value="25">Showing (25 Result)</option>
							<option value="50">Showing (50 Result)</option>
							<option value="75">Showing (75 Result)</option>
							<option value="100">Showing (100 Result)</option>
						</select>
						<select name="orderdate">
							<option value="">Order by date</option>
							<option value="new">Newest</option>
							<option value="old">Oldest</option>
							<option value="old">Price: High to Low</option>
							<option value="old">Price: Low to High</option>
						</select>
					</form>
				</div>
			</div>

			<!-- Rooms Listing -->
			<div class="roomsListing">
				@foreach($pres as $prows)
				@if($type_id != $prows->propertyType()->id)
				<h2>{{ $prows->propertyType()->typename }}</h2>
				@endif
				@php
					$type_id = $prows->propertyType()->id
				@endphp
				<!-- Loop -->
				<div class="row align-items-center">
					<div class="col-md-3 order-md-1"><a href="{{url('/')}}/property/details/{{$prows->id}}"><img src="{{url('/')}}/public/uploadfile/{{$prows->pimg}}" alt="" class="img-fluid"><span><i class="fas fa-camera"></i></span></a></div>
					<div class="col-md-1 col-sm-6 order-md-3">
					</div>
					<div class="col-md order-md-2">
						<div>
							<h4><a href="{{url('/')}}/property/details/{{$prows->id}}">{{$prows->adtitle}}</a></h4>
							<p>{!!$prows->description!!}</p>
							<h5>Date Available: <?php echo date('m/d/Y',strtotime($prows->addate)); ?> | ROOMS | {{$ptypename->cityname}} | Advert ID: UK100{{$prows->id}}</h5>
						</div>
					</div>
					<div class="col-md-2 col-sm-6 order-md-4">
						<a href="" class="mapIcon"><i class="fas fa-map-marker-alt"></i></a>
						<h4>£ {{$prows->rent}} Per Night</h4>
						<small>Including Bills</small>

						<?php 

						if(!empty(Auth::user()->id))
						{
							$res = DB::table('favourite')->where('userid',$userid)->where('propertyid',$prows->id)->first();
							if(!empty($res->id)){

								?>

								<i class="fas fa-check"></i></h4>
							<?php }else { ?>
								<a href="{{url('/')}}/addfav/{{$prows->id}}" data-toggle="tooltip" title="&#10003; 
									Save to favourite">
									<i class="fas fa-heart"></i>
								</a>


							<?php } } else{  ?>
								<a href="{{url('/')}}/addfav/{{$prows->id}}" class="favbtn"><i class="fas fa-heart"></i> Add to Favourite</a>
							<?php } ?>
						</div>
					</div>
					@endforeach

					<div class="d-flex justify-content-center">
						{!! $pres->links() !!}
					</div>
				</div>
				<!-- Rooms Listing End -->

					<h1>FEATURED SERVICE PROVIDERS</h1>

				<div class="row service-row">
					@foreach($featured_services as $service)
					<div class="col-md-3 service-col">
						<div class="item">
							<a href="{{ $service->adsurl }}">
								<img src="{{url('/public/uploadfile'.'/'.$service->adsimage)}}" alt="">
							</a>
						</div>
					</div>
					@endforeach
				</div>

			</div>

		</div>
	</div>



	@include('front.include.footer')
