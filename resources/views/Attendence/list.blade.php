@extends('header_footer.main')
@section('main-container')

<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<form id="formemploy" method="post">
										@csrf
										<label class="form-label" id="m">Employee</label>
										<input class="form-control custom-select" type="text" name="name"
											placeholder="Enter Name" autocomplete="off">
								</div>
							</div>
							<div id="da"class="col-md-6" >
								<div class="form-group">
									<label class="form-label">Select Date:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="feather feather-calendar"></i>
											</div>
										</div><input class="form-control" placeholder="DD-MM-YYYY" type="date"
											name="date">
									</div>
								</div>
							</div>
							<div class="col-md-6" >
								<div class="form-group">
									<label class="form-label">Branch:</label>
									<input class="form-control" type="text" name="branch" placeholder="Enter Branch">
									
								</div>
							</div>
							
							
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="row">
						<div id="da"class="col-md-6" >
								<div class="form-group">
									<label class="form-label">From To:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="feather feather-calendar"></i>
											</div>
										</div><input class="form-control" placeholder="DD-MM-YYYY" type="date"
											name="fromto">
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Shift:</label>
									<input class="form-control" type="text" name="shift" placeholder="Enter shfit">
									
								</div>
							</div>
							
					<div id="da"class="col-md-6" >
							<div class="form-group mt-5">
							<input type="submit" name="submit" class="btn btn-primary btn-block" value="search">
						</div>
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
														<th>Shift</th>
														<th>First_IN</th>
														<th>Last_Out</th>
														<th>Total_Hours100</th>
													</tr>
													
												</thead>
												<tbody>
                                                @foreach($data as $user)
												<?php
												//echo'<pre>'; print_r($user['user_id']); die;
												if( $user['total_hours100'] < 8 ){
												?>
													<tr>
														<td><?php echo $user['user_id'] ?></td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url(../assets/images/users/1.jpg)"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14"><?php echo $user['name'] ?></h6>
																</div>
															</div>
														</td>
														<td><?php echo $user['date'] ?></td>
														<td><?php echo $user['Shift'] ?></td>
														<td><?php echo $user['first_in'] ?></td>
														<td><?php echo $user['last_out'] ?></td>
														<td><?php echo $user['total_hours100'];?></td>
														
													
													</tr>
														<?php } ?>
													
													
												
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
			url: "/late_attendence",
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
						//alert(value.total_hours100);

						if(value.total_hours100 < 8 ){
							//alert(value.total_hours100);
								$('#table_id tbody').append("<tr><td>" + value.user_id + "</td><td>" + value.name + "</td><td>" + value.date + "</td><td>" + value.Shift + "</td><td>" + value.first_in + "</td><td>" + value.last_out + "</td><td>" + value.total_hours100 + "</td></tr>");

								

						}
					});
					// $('#table_id tbody tr').each(function(){
					// 			var a = $(this).find('td:nth-child(5)').html();
					// 			if(a == '00:00:00'){
					// 				$(this).find('td:nth-child(7)').html('0:0');
					// 			}
					// 		});	

				}
				
				else {
					swal("OOH Error!",'Recode is not available', "error");
				}
			}

		});
		
	});

	
</script>
@endsection