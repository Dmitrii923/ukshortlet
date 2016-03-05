@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Favourites List  </h3>
					</div>
					<div class="card-body">
						<div class="container-fluid">
							@if ($errors->any())
							<div class="alert alert-danger">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div><br />
							@endif
							@if(Session::has('success'))
							<div class="alert alert-success">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
								<strong>{{Session::get('success')}}</strong>
							</div>
							@endif
							@if(Session::has('delete'))
							<div class="alert alert-danger">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
								<strong>{{Session::get('delete')}}</strong>
							</div>
							@endif

							<table id="datatable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Sl No</th>
										<th>Property </th>
										<th>Image </th>
										<th>View Details </th>
										
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($ures as $row)
									<tr>
										<td>{{$i}}</td>
										<td>{{$row->adtitle}}</td>
										<td>
											@if($row->pimg!='')
											<img style="height: 40px;width: 40px;"  src="{{url('/')}}/uploadfile/{{$row->pimg}}">
											@endif
										</td>
											<td>
											<a target="_blank" href="{{url('property/details',$row->id)}}">
												<button class="btn btn-primary">View</button>
											</td>
											
										</tr>
										<?php $i++;?>
										@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		@stop



