@extends('admin/master');
@section('content')
		<!-- Content Area -->
		<div class="content-wrapper mt-3">
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title">Expenditure History  </h3>
							</div>
							<div class="card-body">
								<div class="text-right mb-3">
									<a href="{{url('admin/expenditureadd')}}">
										<button class="btn btn-primary">Add Expenditure </button>
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
									</div><br/>
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
											<th>Date</th>
											<th>Vehicle</th>
											<th>Head</th>
											<th>Amount</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
                                        <?php $i=1;?>
                                        @foreach($expres as $row)
										<tr>
											<td>{{$i}}</td>
											<td>{{date('d-m-Y',strtotime($row->date))}}</td>
											<td>
												<?php 
												$vehicleres = DB::table('vehicles')->where('id',$row->vehicleid)->first();
												echo $vehicleres->maker;
												?>
											</td>
											<td>
												<?php 
												$trans = DB::table('transanctions')->where('id',$row->headid)->first();
												echo $trans->headname;
												?>
											</td>
											<td>{{$row->amount}}</td>
											<td>
											<a href="{{url('admin/expendituredit',$row->id)}}">
											<i class="fas fa-edit"></i>
											</td>
											<td>
												<a onclick="return confirm('Are you sure to delete ?')" 
												href="{{url('admin/expendituredelete',$row->id)}}">
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



        