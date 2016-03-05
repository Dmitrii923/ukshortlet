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


                    
					<form name="" action="{{url('admin/newsave')}}" method="post" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">News Add</h3>
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
                                                        id="title"  name="title" autocomplete="off" required>
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


								<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

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



