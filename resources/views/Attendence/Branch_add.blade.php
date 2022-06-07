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

									<form id="empl" method="post" action=" {{url('add')}}">
									@csrf

									<label class="form-label">Branch:</label>
									<input class="form-control" type="text" name="branch" placeholder="Enter Branch">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<label class="form-label" style="display:none;">Shift:</label>
									<input type="submit" name="submit" class="btn btn-primary btn-block" value="submit"
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
