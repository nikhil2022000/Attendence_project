@extends('header_footer.main')
@section('main-container')

<!-- Row-->

<!-- End Row-->

<!-- Row -->
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
					<table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped"
						id="table_id">
						<thead>
							<tr>
								<th>User_id</th>
								<th>Name</th>
								<th>Shift</th>
								<th>Date</th>
								<th>First_IN</th>
								<th>Last_Out</th>
								<th>IN_device</th>
								<th>OUt_device</th>
								<th>Frist_half</th>
								<th>Second_half</th>
								<th>Total_Hours100</th>
								<th>Attendence</th>
								<th>Branch</th>

							</tr>

						</thead>
						<tbody>

							@foreach($data as $user)
						<?php
// $time= $user->first_in->format('h:i:s A');
// $ti= $user->last_out->format('h:i:s A');
$start_datetime = new DateTime($user->first_in);
$end_datetime = new DateTime($user->last_out);
//$new_time = "09:00 am";

$vv = ($start_datetime)->diff($end_datetime)->format('%h:%i');
// $Work = json_decode(json_encode($vv),true);

//  $da=json_decode($vv);
//echo"<pre>";print_r($vv);die;
$s = date("H:i:s", strtotime($user->first_in)); 
$t = date("H:i:s", strtotime($user->last_out)); 
//echo"<pre>";print_r($s);die;


?>

							<tr id="1">

								<td>{{$user->user_id}}</td>
								<td>
									<div class="d-flex">
										<span class="avatar avatar brround me-3"
											style="background-image: url(../assets/images/users/1.jpg)"></span>
										<div class="me-3 mt-0 mt-sm-2 d-block">
											<h6 class="mb-1 fs-14">{{$user->name}}</h6>
										</div>
									</div>
								</td>
								<td>{{$user->shift}}</td>
								<td>{{$user->date}}</td>
								<td>{{$s}}</td>
								<td>{{$t}}</td>
								<td>{{$user->in_device}}</td>
								<td>{{$user->out_device}}</td>
								<td></td>
								<td></td>
								<td>{{$vv}}</td>
								<td></td>
								<td>{{$user->Branch}}</td>



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
	
															
		
						
												
	/////////////////////////////////////////table jquery//////////////////////////////////////
$('#table_id tbody tr').each(function(){
		var in_time = $(this).find('td:nth-child(5)').html();
		var out_time= $(this).find('td:nth-child(6)').html();
		var shift = $(this).find('td:nth-child(3)').html();
		var attendence = $(this).find('td:nth-child(11)').html();
			attend=parseFloat(attendence);
///////////////////////////////////attendence js/////////////////////////////////////////
		// if(in_time == ''){
		// 		$(this).find('td:nth-child(11)').html(0:0);
		// 	}

			if(attend >= 8){
				$(this).find('td:nth-child(12)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(12)').html('AB').css('color', 'red');
			}

/////////////////////////////////////first half ,second half js//////////////
		var gs_intim = "09:00:00 AM";
		var gs_outtim ="05:15 PM";

		var bs_intim = "10:00:00 AM";
		var bs_outtim = "06:15:00 PM";

		var ws_intim = "10:30:00 AM";
		var ws_outtim = "06:30:00 PM";

		var ms_intim = "10:00:00 AM";
		var ms_outtim = "07:00:00 PM";

		var es_intim = "09:15:00 AM";
		var es_outtim = "04:45:00 PM";

		if(shift =='GS'){

			if(in_time <= gs_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= gs_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}
			
	}else if(shift =='WS'){

			if(in_time <= ws_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= ws_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}else if(shift =='MS'){

			if(in_time <= ms_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= ms_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}else if(shift =='BS'){

			if(in_time <= ms_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= ms_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}
	else if(shift =='ES'){

			if(in_time <= es_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= es_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}

	//////////////////////////null value hide/////////////////
	var att = $(this).find('td:nth-child(7)').html();
if(att == ''){
	//alert('df');
	$(this).find('td:nth-child(10)').html('AB').css('color', 'red');

}
if(att == ''){
	//alert('df');
	$(this).find('td:nth-child(9)').html('AB').css('color', 'red');

} 
var timeing = $(this).find('td:nth-child(5)').html();

if(timeing=="00:00:00"){
	$(this).find('td:nth-child(11)').html('0:0');

}
if(timeing=="00:00:00"){
	$(this).find('td:nth-child(12)').html('AB').css('color', 'red');

}

	});

////////////////////search employ ajax///////////////////////////////////
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
				console.log(response['data']);

				//alert(response['data']);
				if (response['data'] !=  '') {
					$.each(response['data'], function () {
						var key = Object.keys(this);
						var value = this;
						//alert(value);
							

						$('#table_id tbody').append("<tr> <td>" + value.user_id + "</td> <td>" + value.name + "</td> <td>" + value.Shift + "</td> <td>" + value.date + "</td> <td>" + value.first_in + "</td>  <td>" + value.last_out + "</td>  <td>" + value.in_device + "</td>  <td>" + value.out_device + "</td>  <td></td>  <td></td>  <td>"+ value.total_hours100 +"</td>  <td></td> <td>"+value.Branch+"</td> </tr>");
					});
					
																	
	/////////////////////////////////////////table jquery//////////////////////////////////////
$('#table_id tbody tr').each(function(){
		var in_time = $(this).find('td:nth-child(5)').html();
		var out_time= $(this).find('td:nth-child(6)').html();
		var shift = $(this).find('td:nth-child(3)').html();
		var attendence = $(this).find('td:nth-child(11)').html();
			attend=parseFloat(attendence);
///////////////////////////////////attendence js/////////////////////////////////////////
		// if(in_time == ''){
		// 		$(this).find('td:nth-child(11)').html(0:0);
		// 	}
		//var s= formatTime(new Date(in_time),"hh:MM:ss");
		
			if(attend >= 8){
				$(this).find('td:nth-child(12)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(12)').html('AB').css('color', 'red');
			}

/////////////////////////////////////first half ,second half js//////////////
		var gs_intim = "09:00:00 AM";
		var gs_outtim ="05:15 PM";

		var bs_intim = "10:00:00 AM";
		var bs_outtim = "06:15:00 PM";

		var ws_intim = "10:30:00 AM";
		var ws_outtim = "06:30:00 PM";

		var ms_intim = "10:00:00 AM";
		var ms_outtim = "07:00:00 PM";

		var es_intim = "09:15:00 AM";
		var es_outtim = "04:45:00 PM";

		if(shift =='GS'){

			if(in_time <= gs_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= gs_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}
			
	}else if(shift =='WS'){

			if(in_time <= ws_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= ws_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}else if(shift =='MS'){

			if(in_time <= ms_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= ms_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}else if(shift =='BS'){

			if(in_time <= ms_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= ms_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}
	else if(shift =='ES'){

			if(in_time <= es_intim){
				$(this).find('td:nth-child(9)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(9)').html('AB').css('color', 'red');
			}
			if(out_time >= es_outtim){
				$(this).find('td:nth-child(10)').html('PR').css('color', 'green');
			}else{
				$(this).find('td:nth-child(10)').html('AB').css('color', 'red');
			}

	}

	//////////////////////////null value hide/////////////////
	var att = $(this).find('td:nth-child(7)').html();
if(att == ''){
	//alert('df');
	$(this).find('td:nth-child(10)').html('AB').css('color', 'red');

}
if(att == ''){
	//alert('df');
	$(this).find('td:nth-child(9)').html('AB').css('color', 'red');

} 
var timeing = $(this).find('td:nth-child(5)').html();

if(timeing=="00:00:00"){
	$(this).find('td:nth-child(11)').html('0:0');

}

	});
				} 
				else {
					swal("OOH Error!",'Recode is not available', "error");

					location.reload();
				}
			},
			error: function (error) {
    				swal("OOH Error!",'Recode is not available', "error");

					location.reload();
}

		});

		


});


</script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
@endsection
