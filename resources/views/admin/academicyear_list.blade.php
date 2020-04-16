@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Academic Details
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Settings</a></li>
		<li><a href="#">Academic Details</a></li>        
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
		<div class="row">			 
			<div class="col-md-12 signup">
			<div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@if (session('message'))
				<div class="alert alert-success">
					<ul> 
						<li>{{ session('message') }}</li>									 
					</ul>
				</div>
			@endif	
			<div class="box-body">
				<a href="{{url("academic/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Start Year</th>							  
							  <th>Start Month</th>
							  <th>End Year</th>							  
							  <th>End Month</th>
							  <th>Date</th>							   				  
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody>
							@if($data != "")							
							@foreach ($data as $academic)
							<tr>								
								<td>{{$i++}}</td>
								<td>{{$academic->start_year}}</td>							
								<td><?php switch($academic->start_month){
									case 1:
											echo "January";break;
									case 2:
											echo "February";break;
									case 3:
											echo "March";break;
									case 4:
											echo "April";break;
									case 5:
											echo "May";break;
									case 6:
											echo "June";break;
									case 7:
											echo "July";break;
									case 8:
											echo "August";break;
									case 9:
											echo "September";break;
									case 10:
											echo "October";break;
									case 11:
											echo "November";break;
									case 12:
											echo "December";break;
								}?>
								
								</td>
								<td>{{$academic->end_year}}</td>
								<td><?php switch($academic->end_month){
									case 1:
											echo "January";break;
									case 2:
											echo "February";break;
									case 3:
											echo "March";break;
									case 4:
											echo "April";break;
									case 5:
											echo "May";break;
									case 6:
											echo "June";break;
									case 7:
											echo "July";break;
									case 8:
											echo "August";break;
									case 9:
											echo "September";break;
									case 10:
											echo "October";break;
									case 11:
											echo "November";break;
									case 12:
											echo "December";break;
								}?>
								</td>
								<td>{{$academic->date}}</td>
								<td><a class="icon-cross2" onclick="return confirmDel()" title="" href="{{url("/academic/delete/$academic->academic_id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
							</tr>  
							@endforeach	
							@endif							
							</tbody> 
						</table>
					</div> 
			</div>			 
          </div>
		  </div>
			<div class="col-md-3"></div>
		</div>	
    </section>
    <!-- /.content -->
 
<!-- DataTable -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/resources/assets/admin-lte/plugins/datatables/dataTables.bootstrap.min.js")}}"></script>
<script>
  $(function () {    
    $('#memTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
	function confirmDel(){
		var x=confirm("Are you Sure You Want Delete.")
		if(x){
			return true;
		}else{
			return false;
		}
	}
</script>
<style>
	#memTable_filter, #memTable_paginate{
		text-align:right;
	}
</style>	
  </div>  
@endsection