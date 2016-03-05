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


                    
					<form name="" action="{{route('vehiclestore')}}" method="post" id="" enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="oldid" value="">

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Vehicle Add</h3>
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
													<label>Vehicle Image <span class="">*</span></label>
													<div class="input-group">
														<input type="file" name="vehicleimage" class="form-control">
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle Maker Name<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="maker"  name="maker" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle Engine Model<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="enginemodel"  name="enginemodel" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle  Model<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="model"  name="model" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle Horse Power <span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="horsepower"  name="horsepower" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle Type <span class="">*</span></label>
													<div class="input-group">
														<select name="typeid" class="form-control" >
															<option value="">-Select Type-</option>
															@foreach($cartypes as $cartyperow)
															<option value="{{$cartyperow->id}}">{{$cartyperow->cartype}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Vehicle Mielege <span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="mielege"  name="mielege" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>liscence No <span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="liscenceno"  name="liscenceno" autocomplete="off" >
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



