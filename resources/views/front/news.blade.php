@include('front.include.header')


<div class="midArea innerArea">
	<div class="container">
	
		
		
		<h1 class="mb-4">NEWS</h1>
		
		<div class="row newsBoxes">

			@foreach($newrses as $newsrow)
			<div class="col-sm-4">
				<div>
					<a href="{{url('/')}}/news/{{$newsrow->id}}"><img src="{{url('/')}}/uploadfile/{{$newsrow->pimg}}" alt="" class="img-fluid"></a>
					<div>
						<h3>{{$newsrow->title}}</h3>
						<small>Posted On: <i class="far fa-clock"></i>{{date('Y-m-d',strtotime($newsrow->created_at))}}</small>
						<p>
							 <?php 
                                    $shrttile = $newsrow->description;
                                            $string = strip_tags($shrttile);
                                            if (strlen($string) > 52) {
                                              $stringCut = substr($string, 0, 45);
                                              $endPoint = strrpos($stringCut, ' ');
                                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                              $string .= '...';

                                  }
                                  echo $string;
                                  ?>
						</p>
						<a href="{{url('/')}}/news/{{$newsrow->id}}">Read more</a>
					</div>
				</div>
			</div>
			@endforeach
		
		</div>

		
	
	</div>
</div>




@include('front.include.footer')
