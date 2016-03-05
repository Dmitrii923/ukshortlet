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



										@foreach($res as $row)


                    
					<form name="" action="{{url('admin/profileupdate')}}" method="post">
						@csrf

						<input type="hidden" name="userid" value="{{$row->id}}">
						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Profile Update</h3>
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
													<label>Title<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="title" value="{{$row->title}}"  name="title" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Name<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="name" value="{{$row->name}}"  name="name" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Email<span class="">*</span></label>
													<div class="input-group">
														<input type="email" class="form-control float-right" 
                                                        id="email" value="{{$row->email}}"  name="email" readonly>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Mobile<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="mobile" value="{{$row->mobile}}"  name="mobile" >
													</div>
												</div>
											</div>
										</div>

										
										<div class="col-6">
											<input type="submit" class="btn btn-primary" value="Save" name="submit">
										</div>

										@endforeach



									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
@stop



