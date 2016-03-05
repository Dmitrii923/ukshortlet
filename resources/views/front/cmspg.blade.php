@include('front.include.header')
<div class="midArea innerArea">
	<div class="container">
		@foreach($pres as $prow)
		<div class="contentArea newcmspg generalContent">
			<h1 class="mb-4">{{$prow->pgtitle}}</h1>
			{!!$prow->description!!}	
		</div>
		@endforeach
	
	</div>
</div>
@include('front.include.footer')


