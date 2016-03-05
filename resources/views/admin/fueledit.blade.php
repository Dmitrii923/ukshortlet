@extends('admin/master');
@section('content')

		<!-- Content Area -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content mt-3">
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


                    
					<form name="" action="{{url('admin/fuelupdate',$fuelres->id)}}" method="post" id="" enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="oldid" value="">

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Fuel Edit</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="text-right "><small>All the fields marked with (*) are .</small></div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle <span class="">*</span></label>
													<div class="input-group">
														<select name="vehicleid" class="form-control">
															<option value="">-Select Vehicle-</option>
															@foreach($vehicles as $vehiclerow)
															<option value="{{$vehiclerow->id}}" 
															<?php 
															if($fuelres->vehicleid==$vehiclerow->id)
															{
																echo "selected";
															}
															?>>{{$vehiclerow->maker}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
										</div>


										

										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Start Meter <span class="">*</span></label>
													<div class="input-group">
														<input type="text" value="{{$fuelres->startmeter}}" name="startmeter" class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Refference <span class="">*</span></label>
													<div class="input-group">
														<input type="text" value="{{$fuelres->ref}}" name="ref" class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Qty <span class="">*</span></label>
													<div class="input-group">
														<input type="text" value="{{$fuelres->qty}}"  name="qty" class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Price <span class="">*</span></label>
													<div class="input-group">
														<input type="text" value="{{$fuelres->price}}"  name="price" class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Date <span class="">*</span></label>
													<div class="input-group">
														<input type="date" name="date" value="{{$fuelres->date}}" class="form-control">
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>State <span class="">*</span></label>
													<div class="input-group">
														<input type="text" name="state" value="{{$fuelres->state}}" class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Note <span class="">*</span></label>
													<div class="input-group">
														<input type="text" name="note" value="{{$fuelres->note}}" class="form-control">
													</div>
												</div>
											</div>
										</div>




										
										<div class="col-6">
											<input type="submit" class="btn btn-primary" value="Save" name="submit">
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
@stop



