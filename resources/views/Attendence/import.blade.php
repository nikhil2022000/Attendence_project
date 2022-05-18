@extends('header_footer.main')
@section('main-container')
<div class="col-md-12 col-xl-6">
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
												<div class="modal-body">
                                                  {{ csrf_field() }}
                                                            <input type="file" name="file">
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
														   
                                                  <div class="modal-footer">
												<button type="submit" class="btn btn-primary">submit</button>
												</div>
                                                </form>
									</div>
								</div>
							</div>



@endsection