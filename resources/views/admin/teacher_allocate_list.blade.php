@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Class Teacher Allocate 
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Academic</a></li>
		<li><a href="#">Class Teacher Allocate </a></li>        
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
				<a href="{{url("teacher_allocate/add")}}">
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
							  <th>Section Name</th>
							  <th>Teacher Allocate</th>							  
							  <th>Date of teacher allocation</th>
							  							   				  
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody>
							<?php //print_r($batch);?>
							@if($data != "")	
																
							@foreach ($data as $allocate)
							<tr>								
								<td>{{$i++}}</td>
								@if($course != "")	
																
							@foreach ($course as $cours)
							   @if($cours->course_id == $allocate->course_id)
								<td>
								{{$cours->name}}
								
								</td>	@endif
								@endforeach
								@endif
								
								@if($batch != "")	
																
							@foreach ($batch as $batc)
							   @if($batc->batch_id == $allocate->batch_id)
								<td>
								{{$batc->batch_name}}
								
								</td>	@endif
								@endforeach
								@endif
								
								@if($emp != "")	
																
							@foreach ($emp as $em)
							   @if($em->emp_id == $allocate->teacher_id)
								<td>
								{{$em->emp_fname}} {{$em->emp_mid_name}} {{$em->emp_lname}}
								
								</td>	@endif
								@endforeach
								@endif						
								
								
								<td><?php $dat=explode(" ",$allocate->date);?>{{$dat[0]}}</td>
								
								<td><a class="icon-pencil" title="" href="{{url("/teacher_allocate/edit/$allocate->allocation_id")}}"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" onclick="return confirmDel()" title="" href="{{url("/teacher_allocate/delete/$allocate->allocation_id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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