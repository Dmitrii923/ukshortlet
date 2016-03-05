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


                    
					<form name="" action="{{url('admin/incomeupdate',$incomeres->id)}}" method="post" id="" enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="oldid" value="">

						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Income Edit</h3>
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
																<?php if($incomeres->vehicleid==$vehiclerow->id){echo "selected";} ?>>{{$vehiclerow->maker}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Transanction Type <span class="">*</span></label>
													<div class="input-group">
														<select name="headid" class="form-control">
															<option value="">-Select Type-</option>
															@foreach($heads as $headrows)
															<option value="{{$headrows->id}}" 
																<?php if($incomeres->headid==$headrows->id){echo "selected";} ?>>{{$headrows->headname}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
										</div>


										

										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Mielege (per Km) <span class="">*</span></label>
													<div class="input-group">
														<input type="text" name="milege" value="{{$incomeres->milege}}" class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Date<span class="">*</span></label>
													<div class="input-group">
														<input type="date" name="date" value="{{$incomeres->date}}"  class="form-control">
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Amount <span class="">*</span></label>
													<div class="input-group">
														<input type="number" name="amount" id="amount" value="{{$incomeres->amount}}"  class="form-control">
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Tax Percent (%) <span class="">*</span></label>
													<div class="input-group">
														<input type="number" name="taxpercent" value="{{$incomeres->taxpercent}}"
														   id="taxpercent" 
														onkeyup="itemTotalCal()"  class="form-control">
													</div>
												</div>
											</div>
										</div>

										<script type="text/javascript">
											function itemTotalCal(id,slno){
									          var amount = document.getElementById("amount").value;  
									          var taxpercent = document.getElementById("taxpercent").value; 
									          var multiply = parseInt(amount*taxpercent);
									          var percenTotal = parseInt(multiply/100);
									          var totAmt = parseInt(amount)+parseInt(percenTotal);
									          document.getElementById('totalamount').value = totAmt;

									        }  
										</script>


										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Total <span class="">*</span></label>
													<div class="input-group">
														<input type="text" id="totalamount" value="{{$incomeres->totalamount}}" readonly name="totalamount" class="form-control">
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



