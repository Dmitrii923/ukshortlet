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


                    
					<form name="" action="{{url('admin/adcostupdate',$editres->id)}}" method="post">
						@csrf

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Ads Cost Edit</h3>
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
													<label>Period<span class="">*</span></label>
													<div class="input-group">
														<select name="period" class="form-control" required>
															<option value="">-Select Duration-</option>
															<option value="1 Week" <?php if($editres->period=="1 Week"){ echo "selected" ; } ?>>1 Week</option>
															<option value="2 Week" <?php if($editres->period=="2 Week"){ echo "selected" ; } ?>>2 Week</option>
															<option value="1 Month" <?php if($editres->period=="1 Month"){ echo "selected" ; } ?>>1 Month</option>
															<option value="3 Month" <?php if($editres->period=="3 Month"){ echo "selected" ; } ?>>3 Month</option>
															<option value="6 Month" <?php if($editres->period=="6 Month"){ echo "selected" ; } ?>>6 Month</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Private Standard  Listing Price<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="private_std_list_price" value="{{$editres->private_std_list_price}}"   name="private_std_list_price" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Private Feature  Listing Price<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="private_feature_list_price" 
                                                        value="{{$editres->private_feature_list_price}}"   name="private_feature_list_price" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Agency Standard  Listing Price<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="agency_std_list_price" 
                                                        value="{{$editres->agency_std_list_price}}"  name="agency_std_list_price" autocomplete="off" >
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Agency Feature Listing  Price<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="agency_feature_list_price" 
                                                        value="{{$editres->agency_feature_list_price}}"
                                                          name="agency_feature_list_price" autocomplete="off" >
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



