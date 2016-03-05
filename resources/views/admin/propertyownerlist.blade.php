@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Property Owners Account List  </h3>
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
										<th>Title</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Owner Type</th>
										<th>Status</th>
										
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($acres as $row)
									<tr>
										<td>{{$i}}</td>
										<td>{{$row->title}}</td>
										<td>{{$row->fname}}</td>
										<td>{{$row->lname}}</td>
										<td>{{$row->email}}</td>
										<td>{{$row->mobile}}</td>
										<td>{{$row->ownertype}}</td>
										<td>
											<?php if($row->status==0) { ?>
												<a onclick="return confirm('Are you sure? ')" 
												href="{{url('admin/powneractive',$row->id)}}">
													<button class="btn btn-danger">Pending</button>
												</a>
											<?php }else { ?>
												<a onclick="return confirm('Are you sure ?')" 
												href="{{url('admin/pownerinactive',$row->id)}}">
												<button class="btn btn-success">Active</button>
												</a>
											<?php } ?>
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



