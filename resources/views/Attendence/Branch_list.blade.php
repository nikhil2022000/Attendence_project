@extends('header_footer.main')
@section('main-container')


<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
				<div class="table-responsive hr-attlist">
					<table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped" id="table_id">
						<thead>
							<tr>
							
								<th>Branch</th>
								<th>Delete_Branch</th>
								<th>Edit_Branch</th>
								

							</tr>

						</thead>
						<tbody>
                            @foreach($list as $lists)
						    <tr>    
                               
                                <td>{{$lists->Branch}}</td>
                                <td><a href='delete/{{$lists->id}}'>Delete</a></td>
                                <td><button type="button" class="btn btn-primary edtbrnch"  id="edi" value="{{$lists->id}}">Edit</button></td>
							</tr>
                            @endforeach
						</tbody>
					</table> 
				</div>
			</div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->



<div class="modal fade" id="edtbrancg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  action=" {{url('update')}}">
      <div class="modal-body">
      <input type="text" name="id" id="jj" style=" display:none;">
          <labal>Branch</labal>
        <input type="text" name="Branch" id="hh">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">submit</button>
      </div>
</form>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function () {
    $(document).on('click','.edtbrnch',function(){
        var b_id = $(this).val();
       //alert(b_id);
        $('#edtbrancg').modal('show');

$.ajax({
				type: "GET",
				url: "/edit/"+b_id,
				success: function(response){
      // alert(response.newcata.Branch);
         $('#hh').val(response.newcata.Branch);
          $('#jj').val(response.newcata.id);
					

				
				}
    
	    });
	});
	});

</script>


@endsection
