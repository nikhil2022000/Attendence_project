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

                                                           </div>
                                                  <div class="modal-footer">
												<button type="submit" class="btn btn-primary">submit</button>
												</div>
                                                </form>
									</div>
								</div>
							</div>



@endsection