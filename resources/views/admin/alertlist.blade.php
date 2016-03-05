@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Alert Services List  </h3>
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
										<th>Service</th>
										<th>City</th>
										<th>Email</th>
										<th>duration</th>
										<th>Total</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($alerts as $row)
									<tr>
										<td>{{$i}}</td>
										<td>
											<?php 
											$serviceid = $row->serviceid;
											$res = DB::table('porpertytypes')->where('id',$serviceid)->first();
											if(!empty($res))
											{
												echo $res->typename;
											}

											?>
										</td>

										<td>
											<?php 
											$cityid = $row->cityid;
											$res = DB::table('city')->where('id',$cityid)->first();
											if(!empty($res))
											{
												echo $res->cityname;
											}

											?>
										</td>
										
										<td>{{$row->email}}</td>
										<td>{{$row->duration}}</td>
										<td>{{$row->total}}</td>
										<td>
											<a href="">
												<i class="fas fa-edit"></i>
											</td>
											<td>
												<a onclick="return confirm('Are you sure to delete ?')" 
												href="">
												<i class="fas fa-trash"></i>
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



