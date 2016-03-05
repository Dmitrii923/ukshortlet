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
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>{{Session::get('success')}}</strong>
                </div>
            @endif

                <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
				<form name="" action="{{url('admin/propertyadsave')}}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="row">
						<div class="col-md-12">
							<div class="card card-primary" style="margin-bottom: 72px">
								<div class="card-header">
									<h3 class="card-title">Ads Property Add</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-12">
											<div class="text-right ">
												<small>All the fields marked with (*) are .</small>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Title<span class="">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control float-right" 
                                                    id="adtitle"  name="adtitle" autocomplete="off" required>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Latitude<span class="">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control float-right" 
                                                    id="latitude"  placeholder="Ex: 51.7520" name="latitude" autocomplete="off" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Longitude<span class="">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control float-right" 
                                                    id="longitude" placeholder="Ex: -1.2577"  name="longitude" autocomplete="off" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Date Available<span class="">*</span></label>
												<div class="input-group">
													<input type="date" class="form-control float-right" 
                                                    id="addate"  name="addate" autocomplete="off" required >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Rent<span class="">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control float-right" 
                                                    id="rent"  name="rent" autocomplete="off" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>City<span class="">*</span></label>
												<div class="input-group">
													<select name="cityid" class="form-control" required>
														<option value="">-Select City-</option>
														@foreach($cityres as $row)
														<option value="{{$row->id}}">{{$row->cityname}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Postcode<span class="">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control float-right" 
                                                    id="postcode"  name="postcode" autocomplete="off" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Address<span class="">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control float-right" 
                                                    id="address"  name="address" autocomplete="off" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Property Type<span class="">*</span></label>
												<div class="input-group">
													<select name="propertypeid" class="form-control" required>
														<option value="">-Select Porperty type-</option>
														@foreach($propertyperes as $row)
														<option value="{{$row->id}}">{{$row->typename}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Bedroom <span class="">*</span></label>
												<div class="input-group">
													<select name="bedroomid" class="form-control" required>
														<option value="">-Select Bedroom-</option>
														@foreach($bedroomres as $row)
														<option value="{{$row->id}}">{{$row->roomtype}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Image<span class="">*</span></label>
												<div class="input-group">
													<input type="file" class="form-control float-right" 
                                                    id="pimg"  name="pimg" autocomplete="off" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Plan <span class="">*</span></label>
												<div class="input-group">
													<select name="adscostpriceid" class="form-control" required>
														<option value="">-Select Plan-</option>
														@foreach($plans as $row)
														<option value="{{$row->id}}">
															{{$row->type}} - {{$row->period}} - ${{$row->price}}
														</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Property Info<span class="">*</span></label>
												<div class="input-group">
													<textarea name="pinfo" class="form-control" id="pinfo" required></textarea>
												</div>
											</div>
										</div>
										<script>
				                        	CKEDITOR.replace( 'pinfo' );
				                		</script>
									</div>

									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Description<span class="">*</span></label>
												<div class="input-group">
													<textarea name="description" class="form-control" id="description" required></textarea>
												</div>
											</div>
										</div>
										<script>
				                        CKEDITOR.replace( 'description' );
				                		</script>
									</div>

									<div class="row">
										<div class="col-6">
											<input type="submit" class="btn btn-primary" value="Save" name="submit">
										</div>
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



