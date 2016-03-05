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


                    
					<form name="" action="{{url('admin/fserviceproviderupdate',$editres->id)}}" method="post" id="" enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="oldid" value="">

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Service Provider Edit</h3>
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
													<label> Image <span class="">*</span></label>
													@if(!empty($editres->adsimage))
													<input type="hidden" name="oldadsimage" value="{{$editres->adsimage}}">

														<img style="height: 50px;width: 50px;" src="{{url('/')}}/uploadfile/{{$editres->adsimage}}">
														@endif
													<div class="input-group">
														<input type="file" name="adsimage" class="form-control">
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>URL<span class="">*</span></label>
													<div class="input-group">
														<input type="text" class="form-control float-right" 
                                                        id="adsurl" value="{{$editres->adsurl}}"  name="adsurl" autocomplete="off" >
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



