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
                                <label class="form-label">Month:</label>
													<select class="form-control custom-select select2" data-placeholder="Select Month" name="month">
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
                                <label class="form-label">Year:</label>
													<select class="form-control custom-select select2" data-placeholder="Select Year" name="year">
														<option label="Select Year"></option>
														<option value="2024">2024</option>
														<option value="2023">2023</option>
														<option value="2022">2022</option>
														<option value="2021">2021</option>
														<option value="2020">2020</option>
														<option value="2019">2019</option>
														<option value="2018">2018</option>
														
													</select>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" style="display:none;">Shift:</label>
									<input type="submit" name="submit" class="btn btn-primary btn-block" value="search">
									
								</div>
							</div>
							

						

						</form>
					
					</div>
				</div>
			</div>
										<div class="table-responsive hr-attlist">
										<table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped" id="m_table">
												<thead>
													<tr>
														<th class="border-bottom-0">Employee Name</th>
														<th class="border-bottom-0 w-5">1</th>
														<th class="border-bottom-0 w-5">2</th>
														<th class="border-bottom-0 w-5">3</th>
														<th class="border-bottom-0 w-5">4</th>
														<th class="border-bottom-0 w-5">5</th>
														<th class="border-bottom-0 w-5">6</th>	
														<th class="border-bottom-0 w-5">7</th>
														<th class="border-bottom-0 w-5">8</th>
														<th class="border-bottom-0 w-5">9</th>
														<th class="border-bottom-0 w-5">10</th>
														<th class="border-bottom-0 w-5">11</th>
														<th class="border-bottom-0 w-5">12</th>
														<th class="border-bottom-0 w-5">13</th>
														<th class="border-bottom-0 w-5">14</th>
														<th class="border-bottom-0 w-5">15</th>
														<th class="border-bottom-0 w-5">16</th>
														<th class="border-bottom-0 w-5">17</th>
														<th class="border-bottom-0 w-5">18</th>
														<th class="border-bottom-0 w-5">19</th>
														<th class="border-bottom-0 w-5">20</th>
														<th class="border-bottom-0 w-5">21</th>
														<th class="border-bottom-0 w-5">22</th>
														<th class="border-bottom-0 w-5">23</th>
														<th class="border-bottom-0 w-5">24</th>
														<th class="border-bottom-0 w-5">25</th>
														<th class="border-bottom-0 w-5">26</th>
														<th class="border-bottom-0 w-5">27</th>
														<th class="border-bottom-0 w-5">28</th>
														<th class="border-bottom-0 w-5">29</th>
														<th class="border-bottom-0 w-5">30</th>
														<th class="border-bottom-0 w-5">31</th>
														<th class="border-bottom-0">Total</th>
													</tr>
												</thead>
												<tbody>
													@foreach($data as $user)
													<tr>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url(../assets/images/users/1.jpg)"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$user->name}}</h6>
																</div>
															</div>
														</td>
													
														 <td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
																<span class="fa fa-adjust text-orange "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td><span class="feather feather-x-circle text-danger "></span></td>
														<td><span class="feather feather-x-circle text-danger "></span></td>
														<td><span class="feather feather-x-circle text-danger "></span></td>
														<td><span class="feather feather-x-circle text-danger "></span></td>
														<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<div class="hr-listd">
																<a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
																<span class="feather feather-check-circle text-success "></span>
															</div>
														</td>
														<td>
															<h6 class="mb-0">
																<span class="text-primary">21</span>
																<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
																<span class="">31</span>
															</h6>
														</td>
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
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
	
															
		
						
												
	/////////////////////////////////////////table jquery//////////////////////////////////////
// $('#table_id tbody tr').each(function(){
// 		var in_time = $(this).find('td:nth-child(5)').html();
// 		var out_time= $(this).find('td:nth-child(6)').html();
// 		var shift = $(this).find('td:nth-child(3)').html();
// 		var attendence = $(this).find('td:nth-child(11)').html();
// 			attend=parseFloat(attendence);
// ///////////////////////////////////attendence js/////////////////////////////////////////
// 		// if(in_time == ''){
// 		// 		$(this).find('td:nth-child(11)').html(0:0);
// 		// 	}

// 			if(attend >= 8){
// 				$(this).find('td:nth-child(12)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(12)').html('AB').css('color', 'red');
// 			}

// /////////////////////////////////////first half ,second half js//////////////
// 		var gs_intim = "09:00:00 AM";
// 		var gs_outtim ="05:15 PM";

// 		var bs_intim = "10:00:00 AM";
// 		var bs_outtim = "06:15:00 PM";

// 		var ws_intim = "10:30:00 AM";
// 		var ws_outtim = "06:30:00 PM";

// 		var ms_intim = "10:00:00 AM";
// 		var ms_outtim = "07:00:00 PM";

// 		var es_intim = "09:15:00 AM";
// 		var es_outtim = "04:45:00 PM";

// 		if(shift =='GS'){

// 			if(in_time <= gs_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= gs_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}
			
// 	}else if(shift =='WS'){

// 			if(in_time <= ws_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= ws_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}else if(shift =='MS'){

// 			if(in_time <= ms_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= ms_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}else if(shift =='BS'){

// 			if(in_time <= ms_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= ms_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}
// 	else if(shift =='ES'){

// 			if(in_time <= es_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= es_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}

// 	//////////////////////////null value hide/////////////////
// 	var att = $(this).find('td:nth-child(7)').html();
// if(att == ''){
// 	//alert('df');
// 	$(this).find('td:nth-child(10)').html('AB').css('color', 'red');

// }
// if(att == ''){
// 	//alert('df');
// 	$(this).find('td:nth-child(9)').html('AB').css('color', 'red');

// } 
// var timeing = $(this).find('td:nth-child(5)').html();

// if(timeing=="00:00:00"){
// 	$(this).find('td:nth-child(11)').html('0:0');

// }
// if(timeing=="00:00:00"){
// 	$(this).find('td:nth-child(12)').html('AB').css('color', 'red');

// }

// 	});

////////////////////search employ ajax///////////////////////////////////
// 	$('#formemploy').on('submit', function (e) {
// 		//alert('ds');
// 		e.preventDefault();
// 		var formData = new FormData(this);

// 		//alert (this); die;
// 		$.ajax({
// 			url: "/search",
// 			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
// 			type: 'POST',
// 			data: new FormData(this),
// 			processData: false,
// 			contentType: false,
// 			beforeSend:                      //reinitialize Datatables
// 				function () {
// 					$('#table_id').dataTable().fnClearTable();
// 					$('#table_id').dataTable().fnDestroy();
// 				},
// 			success: function (response) {
// 				//var valdata=response['data'] ;
// 				console.log(response['data']);

// 				//alert(response['data']);
// 				if (response['data'] !== '') {
// 					$.each(response['data'], function () {
// 						var key = Object.keys(this);
// 						var value = this;
// 						//alert(value);
							

// 						$('#table_id tbody').append("<tr> <td>" + value.user_id + "</td> <td>" + value.name + "</td> <td>" + value.Shift + "</td> <td>" + value.date + "</td> <td>" + value.first_in + "</td>  <td>" + value.last_out + "</td>  <td>" + value.in_device + "</td>  <td>" + value.out_device + "</td>  <td></td>  <td></td>  <td>"+ value.total_hours100 +"</td>  <td></td> <td>"+value.Branch+"</td> </tr>");
// 					});
					
																	
// 	/////////////////////////////////////////table jquery//////////////////////////////////////
// $('#table_id tbody tr').each(function(){
// 		var in_time = $(this).find('td:nth-child(5)').html();
// 		var out_time= $(this).find('td:nth-child(6)').html();
// 		var shift = $(this).find('td:nth-child(3)').html();
// 		var attendence = $(this).find('td:nth-child(11)').html();
// 			attend=parseFloat(attendence);
// ///////////////////////////////////attendence js/////////////////////////////////////////
// 		// if(in_time == ''){
// 		// 		$(this).find('td:nth-child(11)').html(0:0);
// 		// 	}
// 		//var s= formatTime(new Date(in_time),"hh:MM:ss");
		
// 			if(attend >= 8){
// 				$(this).find('td:nth-child(12)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(12)').html('AB').css('color', 'red');
// 			}

// /////////////////////////////////////first half ,second half js//////////////
// 		var gs_intim = "09:00:00 AM";
// 		var gs_outtim ="05:15 PM";

// 		var bs_intim = "10:00:00 AM";
// 		var bs_outtim = "06:15:00 PM";

// 		var ws_intim = "10:30:00 AM";
// 		var ws_outtim = "06:30:00 PM";

// 		var ms_intim = "10:00:00 AM";
// 		var ms_outtim = "07:00:00 PM";

// 		var es_intim = "09:15:00 AM";
// 		var es_outtim = "04:45:00 PM";

// 		if(shift =='GS'){

// 			if(in_time <= gs_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= gs_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}
			
// 	}else if(shift =='WS'){

// 			if(in_time <= ws_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= ws_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}else if(shift =='MS'){

// 			if(in_time <= ms_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= ms_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}else if(shift =='BS'){

// 			if(in_time <= ms_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= ms_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}
// 	else if(shift =='ES'){

// 			if(in_time <= es_intim){
// 				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
// 			}
// 			if(out_time >= es_outtim){
// 				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
// 			}else{
// 				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
// 			}

// 	}

// 	//////////////////////////null value hide/////////////////
// 	var att = $(this).find('td:nth-child(7)').html();
// if(att == ''){
// 	//alert('df');
// 	$(this).find('td:nth-child(10)').html('AB').css('color', 'red');

// }
// if(att == ''){
// 	//alert('df');
// 	$(this).find('td:nth-child(9)').html('AB').css('color', 'red');

// } 
// var timeing = $(this).find('td:nth-child(5)').html();

// if(timeing=="00:00:00"){
// 	$(this).find('td:nth-child(11)').html('0:0');

// }

// 	});
// 				} 
// 				else {
// 					swal("OOH Error!",'Recode is not available', "error");

// 					location.reload();
// 				}
// 			}

// 		});

		


// });


//
 </script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


                        <script>
$(document).ready( function () {
    $('#m_table').DataTable();
} );
</script>

@endsection