@include('front/include/header')

<div class="midArea innerArea">
	<div class="container">
	
		<h1 class="mb-4">BUY TOOLS</h1>
		<div class="text-center mb-5">
			<p>Below are a selection of letting ‘tools’ aimed specifically at short term rental, holiday lettings, which you can purchase to help with your rental experience. A short term let is any period of room or property rental less than 6 months.</p>
			<p><strong>* Note: You can only purchase tools if you have already Created an Account.</strong></p>
			<p>Payment can only be made via Paypal</p>
		</div>
		
		<div class="row buyTools">
			@foreach($res as $row)
			<div class="col-md-6">
				<div>
					<h2>{{$row->tooltitle}}</h2>
					<p>{{$row->tooldesc}}</p>
				
				<?php
				if(!empty(Auth::user()))
				{
					
				 $userid =  Auth::user()->id;
				
				 ?>
					
					<a href="{{url('/')}}/toolbuy/{{$row->id}}">BUY NOW</a>
					<p><strong>£ {{$row->toolprice}}</strong></p>
					<?php } else{ ?>
					<a href="{{url('/')}}/toolbuy/{{$row->id}}">LOGIN TO BUY NOW</a>
					<?php } ?>
				</div>
			</div>
			@endforeach
			
			<div class="col-md-6">
				<div>
					<h2>SHORTLET PROPERTY INSURANCE</h2>
					<p>Insure your property against damage by tenants</p>
					<!-- <a href="">LOGIN TO BUY NOW</a> -->
					<p><strong class="red">Coming soon</strong></p>
				</div>
			</div>
		</div>
		
	
	</div>
</div>
		@include('front/include/footer')




