@include('front.include.header')


<div class="midArea innerArea">
	<div class="container">



			@if(Session::has('success'))
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif

	
		<div class="contentArea adsDetails">
			<!-- Review Section -->
			<p>Use the form below to contact the advertiser. Please ensure you enter a valid email address</p>
			<div class="reviewForm text-left">
				<form name="" action="{{url('/')}}/emailadpost" method="post">
					@csrf
					<?php
                  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                   ?>
                   <input type="hidden" name="currenturl" value="<?=$actual_link?>">

					<div class="row">
						<div class="col-sm-4"><label>Full Name:</label><input type="text" placeholder="Your Name" name="name" class="form-control" required></div>
						<div class="col-sm-4"><label>Phone:</label><input type="text" placeholder="Your Phone" name="phone" class="form-control" required></div>
						<div class="col-sm-4"><label>Email:</label><input type="email" placeholder="Your Email" name="email" class="form-control" required></div>

						<div class="col-sm-4"><label>Subject:</label><input type="email" placeholder="Your Subject" name="subject" class="form-control" required></div>


						<div class="col-sm-12"><label>Message:</label><textarea name="msg" placeholder="Messege" class="form-control"></textarea></div>
						
						<div class="col-sm-12"><input type="submit" value="Submit Review" class="btn"></div>
					</div>
				</form>	


			</div>
			<!-- Review Section End -->

		</div>

	
	</div>
</div>


@include('front.include.footer')


