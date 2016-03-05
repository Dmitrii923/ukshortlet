@include('front.include.header')

<div class="midArea innerArea">
	<div class="container">
	
		
		
		<h1 class="mb-4">Contact Us</h1>
		
		<div class="contactBox">
			<form>
				<div class="row">
					<div class="col-sm-3">Name:</div><div class="col-sm-9"><input type="text" class="form-control" required></div>
					<div class="col-sm-3">Phone:</div><div class="col-sm-9"><input type="text" class="form-control" required></div>
					<div class="col-sm-3">Email:</div><div class="col-sm-9"><input type="email" class="form-control" required></div>
					<div class="col-sm-3">Message:</div><div class="col-sm-9"><textarea class="form-control"></textarea></div>
					<div class="col-sm-3"></div><div class="col-sm-9"><img src="images/captcha.png" alt="" class="img-fluid"></div>
					<div class="col-sm-3"></div><div class="col-sm-9"><input type="submit" value="Send Message" class="btn"></div>
				</div>
			</form>	
		</div>
		

	
	</div>
</div>

@include('front.include.footer')



