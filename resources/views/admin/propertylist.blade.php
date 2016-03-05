@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Property Listings </h3>
					</div>
					<div class="card-body">
						<div class="text-right mb-3">
							<a href="{{url('admin/propertyadd')}}">
								<button class="btn btn-primary">Add Property </button>
							</a>
						</div>

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
										<th>SL No</th>
										<th>Ad Title</th>
										<th>Property Address</th>
										<th>View Ad</th>
										<th>Date Posted</th>
										<th>Duration</th>
										<th>Standard Featured</th>
										<th>Payment</th>
										<th>Status</th>
										<th class="text-center">Edit</th>
										<th class="text-center">Delete</th>
										<!-- <th>Edit</th>
										<th>Delete</th> -->
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($res as $row)
									<tr>
										<td>{{$i}}</td>
										<td>{{$row->adtitle}}</td>
										<td>{{$row->address}}</td>
										<td>
											@if($row->pimg!='')
											<img style="height: 40px;width: 40px;"  src="{{url('/')}}/public/uploadfile/{{$row->pimg}}">
											@endif
										</td>
										<td>{{$row->addate}}</td>
										<td>{{ $row->duration()->period }}</td>
										<td>
											{{ $row->featured == 1 ? 'Featured' : 'Standard' }}
										</td>
										<td>
											@if($row->ispaid=='1')
											<button class="btn btn-success">Paid</button>
											@elseif($row->ispaid=='0')
											<button class="btn btn-danger">Unpaid</button>
											@endif
										</td>
										<td>
											@if($row->ispaid=='1')
											<button class="btn btn-success">Active</button>
											@elseif($row->ispaid=='0')
											<button class="btn btn-danger">Pending</button>
											@endif
										</td>
										<td style="vertical-align: middle; text-align: center; font-size: 20px;">
											<a href="{{ url('/admin/propertyedit'.'/'.$row->id) }}">
												<i class="fa fa-edit" ></i>
											</a>
										</td>
										<td class="text-center" style="vertical-align: middle; text-align: center; font-size: 20px;">
											@if($row->isarchive=='1')
											<a href="{{url('admin/propertyarchive',$row->id)}}" onclick="return confirm('Are you sure ?')">
												<i class="fa fa-trash"></i>
											</a>
											@elseif($row->isarchive=='0')
											<a href="{{url('admin/propertypublish',$row->id)}}" onclick="return confirm('Are you sure?')">
												<i class="fa fa-trash-restore"></i>
											</a>
											@endif
										</td>

											<!-- <td>
										<a href="{{url('admin/propertyedit',$row->id)}}">
											<i class="fas fa-edit"></i>
										</td>
										<td>
											<a onclick="return confirm('Are you sure to delete ?')" 
											href="{{url('admin/propertydel',$row->id)}}">
											<i class="fas fa-trash"></i>
										</td> -->
									</tr>
									<?php $i++;?>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop



