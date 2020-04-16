@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Class
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Academic</a></li>
		<li><a href="#">Class</a></li>        
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
				<a href="{{url("course/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Class Name</th>							  
							  <th>Class Code</th>
							  <th>Class Describtion</th>							  
							  <th>No. of lecture per day</th>							  
							  <th>Minimum Attendence(%)</th>
							  <th>Attendence Type</th>							   				  
							  <th>Working Days</th>							   				  
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody>
								@if($data != "")	
																
							@foreach ($data as $course)
							<tr>								
								<td>{{$i++}}</td>
								<td>{{$course->name}}</td>							
								<td>{{$course->code}}</td>
								<td>{{$course->description}}</td>
								<td>{{$course->lecture_per_day}}</td>
								<td>{{$course->minimun_attendence}}</td>
								<td>{{$course->attendence_type}}</td>
								<td>{{$course->working_days}}</td>
								<td><a class="icon-pencil" title="" href="{{url("/course/edit/$course->course_id")}}"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" onclick="return confirmDel()" title="" href="{{url("/course/delete/$course->course_id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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