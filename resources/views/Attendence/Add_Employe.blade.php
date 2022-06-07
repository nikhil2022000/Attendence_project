@extends('header_footer.main')
@section('main-container')


<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
            <div class="row">
                @if(session()->has('message'))
									<div class="alert alert-success">
									{{ session()->get('message') }}
									</div>
								@endif
					<div class="col-md-12 col-lg-6">
								<div class="form-group">

									<form method="post" action=" {{url('Emp_master')}}" enctype="multipart/form-data">
									{{ csrf_field() }}
									<label class="form-label">IMPORT:</label>
									<input class="form-control" type="file" name="files" >
									<!-- <input class="form-control" type="text" name="name" > -->
                                    
								</div>
							</div>
                            
                            <div class="col-md-6">
								<div class="form-group">
									<label class="form-label" style="display:none;">Shift:</label>
									<input type="submit"  class="btn btn-primary btn-block" 
										style="margin-top: 26px;">

								</div>
							</div>


				
				</form>
                    </div>
                   <br>
                   <br>
				<div class="row">	
					<div class="col-md-12 col-lg-3">
								<div class="form-group">

									<form method="post" action=" {{url('adding_emp')}}">
									@csrf
									<label class="form-label">Emp_id:</label>
									<input class="form-control" type="number" name="Emp_id" placeholder="Enter Emp_id">
                                    
								</div>
							</div>
                            <div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Name:</label>
									<input class="form-control" type="text" name="Name" placeholder="Enter Name">
                                    
								</div>
							</div>
                            <div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Shift:</label>
									<input class="form-control" type="text" name="Shift" placeholder="Enter Shift">
                                    
								</div>
							</div>
                            <div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Branch:</label>
									<input class="form-control" type="text" name="Branch" placeholder="Enter Branch">
                                    
								</div>
							</div>
                            <div class="col-md-12">
								<div class="form-group">
									<label class="form-label" style="display:none;">Shift:</label>
									<input type="submit"  class="btn btn-primary btn-block"
										style="margin-top: 26px;">

								</div>
							</div>


						</div>
					</div>
				</form>
               
				</div>
						</div>
					</div>
				</div>


@endsection
