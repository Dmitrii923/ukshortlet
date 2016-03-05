@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Review List  </h3>
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
										<th>Name </th>
										<th>Email </th>
										<th>Messege </th>
										<th>Phone</th>
										<th>Rating</th>
										<th>Status</th>
										
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($ures as $row)
									<tr>
										<td>{{$i}}</td>
										<td>{{$row->adtitle}}</td>
										<td>{{$row->name}}</td>
										<td>{{$row->email}}</td>
										<td>{{$row->msg}}</td>
										<td>{{$row->phone}}</td>
										<td>{{$row->rating}}</td>

										<td>
											<?php if($row->status!='1') { ?>
											<a href="{{url('/')}}/admin/approvereview/{{$row->id}}" onclick="return confirm('Are you sure ?')">
												<button class="btn btn-danger">Pending</button>
											</a>
										<?php }else{ ?>
											<a href="{{url('/')}}/admin/pendingreview/{{$row->id}}" onclick="return confirm('Are you sure ?')">
												<button class="btn btn-success">Active</button>
											</a>
										<?php  } ?>
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



