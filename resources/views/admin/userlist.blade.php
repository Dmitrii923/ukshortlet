@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Property Owners Details  </h3>
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
										<th>Client No</th>
										<th>Name</th>
										<th>Owner Type & Address</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Verify Doc</th>
										<th> Verify Status</th>
										<th>Verified User</th>
										<th>Archive</th>
										
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($ures as $row)
									<tr>
										<td>{{$i}}</td>
										<td>{{$row->name}}</td>
										<td>{{$row->ownertype}} {{$row->address}}</td>
										<td>{{$row->email}}</td>
										<td>{{$row->mobile}}</td>
										<td>
											<a target="_blank" href="{{url('/')}}/uploadfile/{{$row->uploadfile}}">
												<button class="btn btn-primary">View File</button>
											</a>
										</td>
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


										<td>
											<?php if($row->isverify==0) { ?>
												<a onclick="return confirm('Are you sure? ')" 
												href="{{url('admin/verifyowner',$row->id)}}">
												<button class="btn-danger">Not Verified</button>
												</a>
											<?php }else { ?>
												<a onclick="return confirm('Are you sure ?')" 
												href="{{url('admin/unverifyowner',$row->id)}}">
												<button class="btn-success">Verified</button>
												</a>
											<?php } ?>
										</td>


										<td class="text-center">
											<?php if($row->isdel==0) { ?>
												<input type="checkbox" class="user_active" user_id="{{ $row->id }}" >
											<?php }else { ?>
												<input type="checkbox" class="user_active" user_id="{{ $row->id }}" checked >
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
		</div>
	</section>
</div>
@stop



