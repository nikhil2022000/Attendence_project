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
                                    <form  method="post" enctype="multipart/form-data" action="{{url('holiday')}}"> 
									<div class="row">
										<div class="col-md-4">
												<div class="modal-body">
                                                  {{ csrf_field() }}
                                                            <input type="file" name="fill">
														</div>
													</div>
													
                                                </div>
														   
                                                  <div class="modal-footer">
												<button type="submit" class="btn btn-primary">submit</button>
												</div>
                                                </form>
							
								</div>
							</div>



@endsection