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
									<form id="empl" method="post">
										@csrf
										<label class="form-label" id="m">Employee</label>
										<input class="form-control custom-select" type="text" name="name"
											placeholder="Enter Name" autocomplete="off">
								</div>
							</div>
							<div id="da" class="col-md-6">
								<div class="form-group">
									<label class="form-label">Month:</label>
									<select class="form-control custom-select select2" data-placeholder="Select Month"
										name="month">
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
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Branch:</label>
									<input class="form-control" type="text" name="branch" placeholder="Enter Branch">

								</div>
							</div>


						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="row">
							<div id="da" class="col-md-6">
								<div class="form-group">
									<label class="form-label">Year:</label>
									<select class="form-control custom-select select2" data-placeholder="Select Year"
										name="year">
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
									<input type="submit" name="submit" class="btn btn-primary btn-block" value="search"
										style="margin-top: 26px;">

								</div>
							</div>




							</form>

						</div>
					</div>
				</div>
				<div class="table-responsive hr-attlist">
					<table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped vk"
						id="month_table">
						<thead>
							<?php
// echo'<pre>'; print_r($data); die;

?>
							@foreach($user as $use)
							<?php
							// dd($use);
$fdata['id'][] = $use['user_id'];
$fdata['name'][] = $use['Name'];
$fdata['date'][] = $use['date'];

// $start = date("H:i:s", strtotime($user->first_in));
// $end = date("H:i:s", strtotime($user->last_out));
// //$new_time = "09:00 am";
// $start_datetime = new DateTime($start);
// $end_datetime = new DateTime($end);

// $vv[] = ($start_datetime)->diff($end_datetime)->format('%h:%i');
// //echo "<pre>";print_r($vv);

?>
									@endforeach
									<?php
//die;
$id = array_unique($fdata['id']);
//echo'<pre>'; print_r($id);
$name = array_unique($fdata['name']);

//echo'<pre>'; print_r($name);die;
$dat = array_unique($fdata['date']);
$count = count($dat);
// $a=array( 'id'=>$id,'name'=>$name);
// function group_arrays($id, $name) {
//     $temp_array = array();

//     for($i = 0; $i < count($id); $i++) {
//         $temp_array[$i] = array( '0' => $id[$i],
//                                  '1' => $name[$i]);
//     }
//     return $temp_array;
// }
// echo'<pre>'; print_r(group_arrays($id, $name));die;
// ?>
							<tr>
							<th class="border-bottom-0">Employee ID</th>
							<th class="border-bottom-0">Employee Name</th>
							<!-- <th class="border-bottom-0">Employee</th> -->

								<?php
for ($i = 1; $i <= $count; $i++) {
    $th[] = $i;
    ?>
							<th class="border-bottom-0 w-5">
									<?php echo $i; ?>
								</th>
								<?php }?>


								<th class="border-bottom-0">Total</th>
							</tr>
						</thead>
						<tbody>


							@foreach($employ as $user)
							<?php
    // echo'<pre>'; print_r($employ); die;
		
?>
							 <tr id="id">
								 <td><h6 class="mb-1 fs-14">{{$user->Name}}</h6></td>
								 <td id="id1" >
									<div class="d-flex">
										<span class="avatar avatar brround me-3"
											style="background-image: url(../assets/images/users/1.jpg)"></span>
										<div class="me-3 mt-0 mt-sm-2 d-block">
											<h6 class="mb-1 fs-14">{{$user->Empid}}</h6>
										</div>
									</div>
								</td>


								<?php
			
$c = 0;
$d = 0;
foreach ($Employdata as $dif) {
  // dd($dif);
    if ($user->Empid == $dif['id']) {
        $d += 1;
		$u=8.0;
		$v=4.0;

        ?>
		 
									<td id="id2">
											<div class="hr-listd">

												<h6 class="mb-1 fs-14">
												@foreach($holiday as $us)
												<?php
												//dd($us);
									 if(  $dif['total_hours100'] =='Leave' ) {?>
									
											<button  style="border:none; background-color:white;" type="button" class="btn btn-primary edtbrnch"  id="edi" value="{{$dif['ids']}}"> <span class="fa fa-star text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Leave" id="sp3"></span></button>
										
 									<?php }else if( $dif['date'] == $us->Date  ) {?>
									
									<button  style="border:none; background-color:white;" type="button" class="btn btn-primary edtbrnch"  id="edi" value="{{$dif['ids']}}"> <span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday" id="sp3"></span></button>
						
							 <?php } else if( $dif['total_hours100'] >= $v && $dif['total_hours100'] <= $u ) { ?>
									
									<button  style="border:none; background-color:white;" type="button" class="btn btn-primary edtbrnch"  id="edi" value="{{$dif['ids']}}"><span class="fa fa-adjust text-orange"  data-bs-toggle="tooltip" data-bs-placement="top" title="Half-day" id="sp3"></span></button>
						
							 <?php } else{
										 
													 if ($dif['total_hours100'] >= $u) {$c += 1;?>
													 <button style="border:none; background-color:white;" type="button" class="btn btn-primary edtbrnch"  id="edi" value="{{$dif['ids']}}" > <span class="feather feather-check-circle text-success" id="sp1"></button> 
													 <?php

       								 } 
										else{?>
											<button  style="border:none; background-color:white;" type="button" class="btn btn-primary edtbrnch"  id="edi" value="{{$dif['ids']}}"> <span class="feather feather-x-circle text-danger " id="sp2"> </button>
 									<?php }
									 }
									 ?>
									@endforeach
									 
</h6>

											</div>
										</td>

									<?php
}
    ?>

								<?php
}


?>
<!--                    monthly attendence                    -->
											<td  id="id3">
											<div class="hr-listd">
														<h6 class="mb-0">
																<span class="text-primary">{{ $c }}</span>
																<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
																<span class="">{{$d}}</span>
												</h6>
											</div>
										</td>


							</tr>
					
			<!--Edit Modal -->
			<div class="modal fade"  id="editmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8">
									<form id="timeediting" method="post" action="{{url('time')}}">
									@csrf
									<div class="form-group">
										<label class="form-label">Clock In</label>
										<div class="input-group">
											<input type="text"  name='first_in' id="gg">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input orange" >
										<span class="custom-switch-indicator "></span>
										<span class="custom-switch-description text-dark">Late</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock Out</label>
										<div class="input-group">
										<input type="number"  name='id' id="uniq" style="display:none;">

											<input type="text"  name='last_out' id="kk">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange">
										<span class="custom-switch-indicator"></span>
						 				<span class="custom-switch-description text-dark">half Day</span>
									</label>
								</div>
							</div>
							<div class="form-group">
							<select name="Leave" id="Leave" style="width: 207px; height: 30px;">
							`<option value="">select</option>
                `            <option value="Leave">Leave</option>
                           </select>
							</div>
							
						</div>
						<div class="modal-footer d-flex">
							<div> 
								<a  href="javascript:void(0);" class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#presentmodal" data-bs-dismiss="modal"><i class="feather feather-arrow-left me-1"></i>Back</a>
							</div>
							<div class="ms-auto">
							<input type="submit" name="submit" class="btn btn-primary btn-block">
						
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<!-- End Edit Modal  -->
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


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<script>
$(document).ready(function () {
    $(document).on('click','.edtbrnch',function(){
        var b_id = $(this).val();
       // alert(b_id);
        $('#editmodal').modal('show');

$.ajax({
				type: "GET",
				url: "/timeedit/"+b_id,
				success: function(response){
	// 	console.log(response.newcata.user_id);
    //   alert(response.newcata.user_id);
	$.each(response['newcata'], function () {
						var key = Object.keys(this);
						var value = this;
						//alert(value.first_in);
         $('#gg').val(value.first_in);
          $('#kk').val(value.last_out);
          $('#uniq').val(b_id);
					
	    });

				
				}
    
	    });
	});
	});
	
	

	$(document).ready(function () {
		$('#month_table').DataTable();
	});

	$('#empl').on('submit', function (e) {
		//alert('ds');
		e.preventDefault();
		var formData = new FormData(this);

		//alert (this); die;
		$.ajax({
			url: "/search_month",
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			type: 'POST',
			data: new FormData(this),
			processData: false,
			contentType: false,
			beforeSend:                      //reinitialize Datatables
				function () {
					$('#month_table').dataTable().fnClearTable();
					$('#month_table').dataTable().fnDestroy();
				},
			success: function (response) {
				//var valdata=response['data'] ;
				//console.log(response['data']); return false;

				function onlyUnique(value, index, self) {
 					 return self.indexOf(value) === index;
						}

				//alert(response['data']);
				if (response['data'] !=  '') {
					var nm = [];
					var nam = [];


					$.each(response['data'], function () {
						var key = Object.keys(this);
						var value = this;
						// console.log(value);
						var c = value.id;
						var d = value.Name;
					    nm.push(c+'-'+d);

				});



					 var unique = nm.filter(onlyUnique);

					$.each(unique, function () {
						var key = Object.keys(this);
						var val = this;
						//console.log(val);
						$('#month_table tbody ').append("<tr><td mineData="+val+">" + val.split('-')[0] + "</td></tr>");

					});

					var i = 0;
					$('#month_table tbody tr').each(function(){
					i++;
					//console.log(i);return false;
				    var d = $(this).prop("id","id_"+i);
		            var in_time = $(d).find('td:nth-child(1)').attr('mineData');
					in_time = in_time.split('-');
					//alert(d);

					$("#id_"+i).append("<td>" + in_time[1] + "</td>");

					var E = 0;
					var F = 0;
					$.each(response['data'], function () {
						var key = Object.keys(this);
						var dat = this;
                      var a = '8.0';
					  attend=parseFloat(a);
					if(in_time[0] ==  dat.id){
						F += 1;
						if(dat.total_hours100 >= attend){
							E += 1;
							$("#id_"+i).append("<td>"+' <span class="feather feather-check-circle text-success" id="sp1">'+" </td>");

						} else {
						$("#id_"+i).append("<td>" +  '<span class="feather feather-x-circle text-danger ">'+"</td>");


						}

					}

				});

				$("#id_"+i).append("<td>"+ E + "/"+ F +"</td>");
			});
				}
		},
		error: function (error) {
    				swal("OOH Error!",'Recode is not available', "error");

					location.reload();
		}
		});
	});

</script>

@endsection