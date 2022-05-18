@extends('header_footer.main')
@section('main-container')

	<!-- Row-->
    <div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Days Overview This Month</h4>
									</div>
									<div class="card-body pt-0 pb-3">
										<div class="row mb-0 pb-0">
											<div class="col-md-6 col-lg-2 text-center py-5">
												<span class="avatar avatar-md bradius fs-20 bg-primary-transparent">31</span>
												<h5 class="mb-0 mt-3">Total Working Days</h5>
											</div>
											<div class="col-md-6 col-lg-2 text-center py-5 ">
												<span class="avatar avatar-md bradius fs-20 bg-success-transparent">24</span>
												<h5 class="mb-0 mt-3">Present Days</h5>
											</div>
											<div class="col-md-6 col-lg-2 text-center py-5">
												<span class="avatar avatar-md bradius fs-20 bg-danger-transparent">2</span>
												<h5 class="mb-0 mt-3">Absent Days</h5>
											</div>
											<div class="col-md-6 col-lg-2 text-center py-5">
												<span class="avatar avatar-md bradius fs-20 bg-warning-transparent">0</span>
												<h5 class="mb-0 mt-3">Half Days</h5>
											</div>
											<div class="col-md-6 col-lg-2 text-center py-5 ">
												<span class="avatar avatar-md bradius fs-20 bg-orange-transparent">2</span>
												<h5 class="mb-0 mt-3">Late Days</h5>
											</div>
											<div class="col-md-6 col-lg-2 text-center py-5">
												<span class="avatar avatar-md bradius fs-20 bg-pink-transparent">5</span>
												<h5 class="mb-0 mt-3">Holidays</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-lg-5">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<form id="formemploy" method="post">
																@csrf
															<label class="form-label">Employee</label>
															<input   class="form-control custom-select" type="text" name="name" placeholder="Enter Name" autocomplete="off" required>
																</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="form-label">Select Date:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="feather feather-calendar"></i>
																	</div>
																</div><input class="form-control" placeholder="DD-MM-YYYY" type="date" name="date">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-5">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="form-label">Month:</label>
															<select   class="form-control custom-select select2" data-placeholder="Select Month">
																<option label="Select Month"></option>
																<option value="1">January</option>
																<option value="2">February</option>
																<option value="3">March</option>
																<option value="4">April</option>
																<option value="5">May</option>
																<option value="6">June</option>
																<option value="7">July</option>
																<option value="8">August</option>
																<option value="9">September</option>
																<option value="10">October</option>
																<option value="11">November</option>
																<option value="12">December</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="form-label">Year:</label>
															<select  class="form-control custom-select select2" data-placeholder="Select Year">
																<option label="Select Year"></option>
																<option value="1">2024</option>
																<option value="2">2023</option>
																<option value="3">2022</option>
																<option value="4">2021</option>
																<option value="5">2020</option>
																<option value="6">2019</option>
																<option value="7">2018</option>
																<option value="8">2017</option>
																<option value="9">2016</option>
																<option value="10">2015</option>
																<option value="11">2014</option>
																<option value="12">2013</option>
																<option value="13">2012</option>
																<option value="14">2011</option>
																<option value="15">2019</option>
																<option value="16">2010</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-2">
												<div class="form-group mt-5">
													<input type="submit" name="submit"class="btn btn-primary btn-block" value="search">
												</div>
										</form>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped" id="table_id" >
												<thead>
													<tr>
														<th>User_id</th>
														<th>Name</th>
														<th>Date</th>
														<th>First_IN</th>
														<th>Last_Out</th>
														
														<th>Total_Hours100</th>
													</tr>
													
												</thead>
												<tbody>
                                                @foreach($data as $user)
													<tr>
														<td>{{$user->user_id}}</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url(../assets/images/users/1.jpg)"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$user->name}}</h6>
																</div>
															</div>
														</td>
														<td>{{$user->date}}</td>
														<td>{{$user->first_in}}</td>
														<td>{{$user->last_out}}</td>
														
														<td>{{$user->total_hours100}}</td>
														
													
													</tr>

													
													
												
                                                    @endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div><!-- end app-content-->
				</div>
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
	$('#formemploy').on('submit', function (e) {
		//alert('ds');
		e.preventDefault();
		var formData = new FormData(this);

		//alert (this); die;
		$.ajax({
			url: "/search",
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			type: 'POST',
			data: new FormData(this),
			processData: false,
			contentType: false,
			beforeSend:                      //reinitialize Datatables
				function () {
					$('#table_id').dataTable().fnClearTable();
					$('#table_id').dataTable().fnDestroy();
				},
			success: function (response) {
				//var valdata=response['data'] ;
				//console.log(response['data']);

				//alert(response['data']);
				if (response['data'] != '') {
					$.each(response['data'], function () {
						var key = Object.keys(this);
						var value = this;
						//alert(value.name);
						$('#table_id tbody').append("<tr><td>" + value.user_id + "</td><td>" + value.name + "</td><td>" + value.date + "</td><td>" + value.first_in + "</td><td>" + value.last_out + "</td><td>" + value.in_device + "</td><td>" + value.out_device + "</td><td>" + value.total_hours100 + "</td></tr>");
					});
				} else {
					swal("OOH Error!",'Recode is not available', "error");
				}
			}

		});


		//$('tbody').html(response['data']);



	});

</script>
@endsection