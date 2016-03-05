@extends('admin/master');
@section('content')
<!-- Content Area -->
<div class="content-wrapper mt-3">
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Buy Tool List  </h3>
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
										<th>Toolid </th>
										<th>Order Status </th>
										<th>Trnsanction Id </th>
										<th>File </th>

									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>
									@foreach($res as $row)
									<tr>
										<td>{{$i}}</td>
										<?php 
											$toolid = $row->toolid;
											$btoolres = DB::table('buytools')->where('id',$toolid)->get();
											if(!empty($btoolres))
											{
												foreach($btoolres as $btoolrow)
												{
													$tooltitle = $btoolrow->tooltitle;
													$toolfile = $btoolrow->filename;
												}
											}else{
												$tooltitle = "";
												$toolfile = "";
											}

											?>

										<td>
											<?php echo $tooltitle;?>
										</td>
										<td>{{$row->order_status}}</td>
										<td>{{$row->transaction_id}}</td>
										<td>
											<a href="{{url('/')}}/public/uploadfile/{{$toolfile}}" target="_blank">
												<button class="btn btn-primary">View</button>
											</a>
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



