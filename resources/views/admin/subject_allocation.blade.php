@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subject Allocation
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Subjects</a></li>
		<li><a href="#">Subject Allocation</a></li>        
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
				<a href="{{url("subject_allocation/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Department</th>							  
							  <th>Employee Name</th>
							  <th>Academic Year</th>							  
							  <th>Class</th>							  
							  <th>Section</th>
							  <th>Subject</th>							   				  
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody><?php $i=1;?>
								@if($data != "")	
																
							@foreach ($data as $allocation)
							<tr>								
								<td>{{$i++}}</td>
								<td>@if($dept!="")
						 @foreach($dept as $dep)
								@if($allocation->dept==$dep->dept_id)
								{{$dep->dept_name}}
								@endif
						@endforeach
					 @endif</td>							
								<td>@if($emp!="")
						 @foreach($emp as $em)
								@if($allocation->emp_name==$em->emp_id)
								{{$em->emp_fname}} {{$em->emp_mid_name}} {{$em->emp_lname}}
								@endif
						@endforeach
					 @endif</td>
								<td>@if($academic!="")
						 @foreach($academic as $ac)
								@if($allocation->academic ==$ac->academic_id)
								{{$ac->start_year}}
								@endif
						@endforeach
					 @endif</td>
					 
					 <td>@if($course!="")
						 @foreach($course as $cours)
								@if($allocation->course ==$cours->course_id)
								{{$cours->name}}
								@endif
						@endforeach
					 @endif</td>
								<td>@if($batch!="")
						 @foreach($batch as $batc)
								@if($allocation->batch==$batc->batch_id)
								{{$batc->batch_name}}
								@endif
						@endforeach
					 @endif</td>
								<td>@if($subject!="")
						 @foreach($subject as $sub)
								@if($allocation->subject==$sub->id)
								{{$sub->sub_name}}
								@endif
						@endforeach
					 @endif</td>
								
								<td><a class="icon-pencil" title="" href="{{url("/subject_allocation/edit/$allocation->allocation_id")}}"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" title="" href="{{url("/subject_allocation/delete/$allocation->allocation_id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
<style>
	#memTable_filter, #memTable_paginate{
		text-align:right;
	}
</style>	
  </div>  
@endsection