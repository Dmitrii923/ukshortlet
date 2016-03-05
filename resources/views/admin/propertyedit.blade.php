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

            <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
            
			<form name="" action="{{url('admin/propertyadupdate',$res->id)}}" method="post" enctype="multipart/form-data">
				@csrf

				<div class="row">
					<div class="col-md-12">
						<div class="card card-primary" style="margin-bottom: 80px;">
							<div class="card-header">
								<h3 class="card-title">Ads Property Edit</h3>
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
                                                id="adtitle"  name="adtitle" autocomplete="off" value="{{$res->adtitle}}" required>
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
                                                id="latitude"  placeholder="Ex: 51.7520" name="latitude" 
                                                value="{{$res->latitude}}" autocomplete="off" >
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
                                                id="longitude" value="{{$res->longitude}}" placeholder="Ex: -1.2577"  name="longitude" autocomplete="off" >
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
                                                id="addate" value="{{$res->addate}}"  name="addate" autocomplete="off" required >
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
                                                id="rent" value="{{$res->rent}}" name="rent" autocomplete="off" >
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
													<option value="{{$row->id}}" 
													<?php if($res->cityid==$row->id){echo "selected"; } ?>>
														{{$row->cityname}}</option>
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
                                                id="postcode" value="{{$res->postcode}}" name="postcode" autocomplete="off" >
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
                                                id="address" value="{{$res->address}}" name="address" autocomplete="off" >
											</div>
										</div>
									</div>
								</div>




								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Porperty Type<span class="">*</span></label>
											<div class="input-group">
												<select name="propertypeid" class="form-control" required>
													<option value="">-Select Porperty type-</option>
													@foreach($propertyperes as $row)
													<option value="{{$row->id}}" 
														<?php if($res->propertypeid==$row->id){echo "selected"; } ?>
														>{{$row->typename}}</option>
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
													<option value="{{$row->id}}" 
														<?php if($res->bedroomid==$row->id){echo "selected"; } ?>
														>{{$row->roomtype}}</option>
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
											<div>
												@if($res->pimg!='')
												<img style="height: 100px;width: 100px;" src="{{url('/public/uploadfile').'/'.$res->pimg}}">
												<input type="hidden" name="oldpimg" value="{{$res->pimg}}">
												@endif
											</div>
											<div class="input-group">
												
												<label>Change Image</label>
												<input type="file"  
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
													<option value="{{$row->id}}"
														<?php if($res->adscostpriceid==$row->id){echo "selected"; } ?>
														>
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
												<textarea name="pinfo" class="form-control" id="pinfo" required>{{$res->pinfo}}</textarea>
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
												<textarea name="description" class="form-control" required>{{$res->description}}</textarea>
											</div>
										</div>
									</div>
									<script>
			                        CKEDITOR.replace( 'description' );
			                		</script>
								</div>

								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label class="pull-right" style="display: inline-flex;">
												@if($res->featured == 1)
												<input type="checkbox" name="featured" class="ace" style="width: 24px; height: 24px;" checked  />
												@elseif($res->featured == 0)
												<input type="checkbox" name="featured" class="ace" style="width: 24px; height: 24px;"  />
												@endif
												<span class="lbl" style="margin-left: 10px;">Featured</span>
											</label>
										</div>
									</div>
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



