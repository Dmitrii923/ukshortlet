@include('front.include.header')


<div class="midArea innerArea">
	<div class="container">



		@if(Session::has('success'))
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif

		@foreach($pres as $prows)

		<div class="contentArea adsDetails">
			<h1 class="mb-4">{{$prows->adtitle}} <img src="images/rooms/hilton/logo.png" alt="" class="img-fluid"></h1>
			
			<div class="row mt-5 mb-4 text-md-left">
				<div class="col-md-6">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active"><img src="{{url('/')}}/public/uploadfile/{{$prows->pimg}}" alt="" class="w-100"></div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><img src="images/arrow-lft.png" alt=""></a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><img src="images/arrow-rgt.png" alt=""></a>
					</div>
					<a href="" class="mapIcon"><i class="fas fa-map-marker-alt"></i></a>
				</div>
				<div class="col-md-3 detailsBox">
					<div>
						<h2>PROPERTY INFO:</h2>
						{!!$prows->pinfo!!}
					</div>
				</div>
				<div class="col-md-3 detailscontactBox">
					<div>
						<h2>Contact Details:</h2>
						<span><i class="fas fa-phone-alt"></i> 0876 543 210</span>
						
						<a href="{{url('/')}}/emailads"><i class="far fa-envelope"></i> Email Advertiser</a>
					</div>
				</div>
			</div>
			
			
			<div class="description mb-5">
				<h2>PROPERTY DESCRIPTION:</h2>
				{!!$prows->description!!}
			</div>
			
			
			
			<!-- Review Section -->
			<div class="reviewDetails">
				<!-- Reviews Loop -->
				@foreach($reviews as $reviewrow)
				<div>
					<h4>{{$reviewrow->name}}</h4>
					<div class="rating">
						<?php if($reviewrow->rating=='1') { ?>
						<i class="fas fa-star"></i>
						<?php } else if($reviewrow->rating=='2') { ?>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<?php } else if($reviewrow->rating=='3') { ?>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<?php } else if($reviewrow->rating=='4') { ?>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<?php }  else if($reviewrow->rating=='5') { ?>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<?php } ?>
					</div>
					<p>{{$reviewrow->msg}}</p>
				</div>
				@endforeach
				<!-- Reviews Loop End -->
				
				<!-- Reviews Loop End -->
			</div>
			<div class="reviewForm text-left">
				<form name="" action="{{url('/')}}/reviewpost" method="post">
					@csrf
					<?php
					$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					?>
					<input type="hidden" name="currenturl" value="<?=$actual_link?>">
					<input type="hidden" name="propid" value="{{$prows->id}}">

					<div class="row">
						<div class="col-sm-4"><label>Full Name:</label><input type="text" name="name" class="form-control" required></div>
						<div class="col-sm-4"><label>Phone:</label><input type="text" name="phone" class="form-control" required></div>
						<div class="col-sm-4"><label>Email:</label><input type="email" name="email" class="form-control" required></div>
						<div class="col-sm-12"><label>Message:</label><textarea name="msg" class="form-control"></textarea></div>
						<div class="col-sm-12">
							<label>Rating:</label>
							<input type="radio" name="rating" value="1" >
							<input type="radio" name="rating" value="2" >
							<input type="radio" name="rating" value="3" >
							<input type="radio" name="rating" value="4" >
							<input type="radio" name="rating" value="5" >
						</div>
						<div class="col-sm-12"><input type="submit" value="Submit Review" class="btn"></div>
					</div>
				</form>	


			</div>
			<!-- Review Section End -->

		</div>

		@endforeach

	</div>
</div>


@include('front.include.footer')


