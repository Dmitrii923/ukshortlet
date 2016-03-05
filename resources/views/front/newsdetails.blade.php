@include('front.include.header')


<div class="midArea innerArea">
	<div class="container">


		@foreach($pres as $prows)
	
		<div class="contentArea adsDetails">
			<h1 class="mb-4">{{$prows->adtitle}} <img src="images/rooms/hilton/logo.png" alt="" class="img-fluid"></h1>
			
			<div class="row mt-5 mb-4 text-md-left">
				<div class="col-md-6">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active"><img src="{{url('/')}}/uploadfile/{{$prows->pimg}}" alt="" class="w-100"></div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><img src="images/arrow-lft.png" alt=""></a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><img src="images/arrow-rgt.png" alt=""></a>
					</div>
					<a href="" class="mapIcon"><i class="fas fa-map-marker-alt"></i></a>
				</div>
				
			</div>
			
			
			<div class="description mb-5">
				<h2>PROPERTY DESCRIPTION:</h2>
				{!!$prows->description!!}
			</div>


		</div>

		@endforeach
	
	</div>
</div>


@include('front.include.footer')


