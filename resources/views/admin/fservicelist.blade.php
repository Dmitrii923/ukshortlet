@extends('admin/master');
@section('content')
		<!-- Content Area -->
		<div class="content-wrapper mt-3">
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title">Vehicle List  </h3>
							</div>
							<div class="card-body">
								<div class="text-right mb-3">
									<a href="{{url('admin/fserviceprovideradd')}}">
										<button class="btn btn-primary">Add Service Provider </button>
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
											<th>Sl No</th>
											<th>Ads Image</th>
											<th>Ads URL</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
                                        <?php $i=1;?>
                                        @foreach($fserviceproviders as $row)
										<tr>
											<td>{{$i}}</td>
											<td><img style="height: 50px;width: 50px;" src="{{url('/public/uploadfile').'/'.$row->adsimage}}"></td>
											<td>{{$row->adsurl}}</td>
											<td>
											<a href="{{url('admin/fserviceprovideredit',$row->id)}}">
											<i class="fas fa-edit"></i>
											</td>
											<td>
												<a onclick="return confirm('Are you sure to delete ?')" 
												href="{{url('admin/fserviceproviderdel',$row->id)}}">
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



        