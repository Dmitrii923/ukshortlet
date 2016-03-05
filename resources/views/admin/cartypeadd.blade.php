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
                    
					<form name="" action="{{route('cartypestore')}}" method="post" id="" enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="oldid" value="">

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Car Type Add</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="text-right required"><small>All the fields marked with (*) are required.</small></div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label> Car Type<span class="required">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="cartype"  name="cartype" autocomplete="off" required>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Seat Capacity<span class="required">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="seatCapacity"  name="seatCapacity" autocomplete="off" required>
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



