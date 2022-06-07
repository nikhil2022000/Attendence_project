@extends('header_footer.main')
@section('main-container')
<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-lg-12">
				 <div class="table-responsive hr-attlist">
					<table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped"
						id="table_id">
						<thead>
							<tr>
								<th>User_id</th>
								<th>Name</th>
								<th>Shift</th>
								<th>Branch</th>
								<th>Status</th>

							</tr>

						</thead>
						<tbody>

							@foreach($emp as $user)
<?php   
  //echo"<pre>";print_r($user);die;

?>
                                <td>{{$user->Empid}}</td>
								<td>{{$user->Name}}</td>
								<td>{{$user->Shift}}</td>
								<td>{{$user->Branch}}</td>
								<td>
								<?php
								if( $user->status == '0' ){
								?>	
								<a class="btn btn-primary" href="{{url('/status_update',$user->Empid)}}" role="button">Active</a>
								<?php
								}else
								{	
									?>
										<a class="btn btn-warning" href="{{url('/status_update',$user->Empid)}}" role="button">Inactive</a></td>

									<?php
								}
								
								?>
							
								


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
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

                       




@endsection