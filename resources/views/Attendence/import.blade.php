@extends('header_footer.main')
@section('main-container')
<style>

#vv {
   
    max-width: 100%;
}
	</style>
<div class="col-md-12 col-xl-6 " id="vv">
								<div class="card card-blog-overlay1">
									<div class="card-body  text-white">
									@if(session()->has('message'))
										<div class="alert alert-success">
											{{ session()->get('message') }}
										</div>
									@endif		
									</div>
									<div class="card-footer  text-white z-index-10" style="background-color: #917d2b;">
                                    <form  method="post" enctype="multipart/form-data" action="{{url('import')}}"> 
									<div class="row">
										<div class="col-md-4">
												<div class="modal-body">
                                                  {{ csrf_field() }}
                                                            <input type="file" name="file">
														</div>
													</div>
													<div class="col-md-4">
														<div class="modal-body">		
                                                            <select style="padding: 4px;width: 151px;" data-placeholder="Select Month" name="month">
														<option label="Select Month"></option>
														<option value="January">January</option>
														<option value="February">February</option>
														<option value="March">March</option>
														<option value="April">April</option>
														<option value="May">May</option>
														<option value="June">June</option>
														<option value="July">July</option>
														<option value="August">August</option>
														<option value="September">September</option>
														<option value="October">October</option>
														<option value="November">November</option>
														<option value="December">December</option>
													</select>
														</div>
													</div>
													<div class="col-md-4">	
													<div class="modal-body">
													<select style="padding: 4px;width: 151px;" data-placeholder="Select year" name="year">
														<option label="Select year"></option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
													</select>

													</div>

                                                </div>
                                                </div>
														   
                                                  <div class="modal-footer">
												<button type="submit" class="btn btn-primary">submit</button>
												</div>
                                                </form>
									</div>
								</div>
							</div>



@endsection