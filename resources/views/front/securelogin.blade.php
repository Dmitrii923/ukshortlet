@include('front.include.header')

<div class="midArea innerArea">
	<div class="container">
		
		
		
		<h1 class="mb-4">LOGIN</h1>
		<div class="text-center mb-5">
			
		</div>
		
		
	@if(Session::has('success'))
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif

		
		<div class="contactBox">


		
			<form method="post" action="{{ route('securelogin.custom') }}" enctype="multipart/form-data">
				@csrf
				<h4>Login Details Here</h4>
				<div class="row">
					<div class="col-sm-3"> Email:</div>
					<div class="col-sm-9">
						<input type="text" name="name" placeholder="Email" class="form-control" required>
					</div>
					<div class="col-sm-3"> Password:</div>
					<div class="col-sm-9">
						<input type="password" name="password" placeholder="Password" class="form-control" required>
					</div>

					<div class="col-sm-3"> &nbsp;</div>

					<div class="col-sm-9">
						<input type="submit" name="password" class="btn" required>
					</div>
				</form>	
			</div>
			

			
		</div>
	</div>

	@include('front.include.footer')




