@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assign Subject
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Subjects</a></li>
		<li><a href="#">Assign Subject</a></li>        
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
				<a href="{{url("assign_subject/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Academic Year</th>							  
							  <th>Class</th>							  
							  <th>Section</th>							  
							  <th>Subject</th>							  
							   				  
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody><?php $i=1;?>
							@if($data != "")	
																
							@foreach ($data as $assi_sub)
							<tr>								
								<td>{{$i++}}</td>
								<td>@if($academic!="")
									 @foreach($academic as $ac)
											@if($assi_sub->academic == $ac->academic_id)
											{{$ac->start_year}}
											@endif
									@endforeach
								 @endif</td>
								<td>@if($course!="")
								@foreach($course as $co)
								@if($assi_sub->course_id == $co->course_id) {{$co->name}} @endif
								@endforeach
								@endif
								</td>							
								<td>@if($batch!="")
								@foreach($batch as $batc)
								@if($assi_sub->batch_id == $batc->batch_id) {{$batc->batch_name}} @endif
								@endforeach
								@endif</td>							
								<td>@if($subject!="")
								@foreach($subject as $subjec)
								@if($assi_sub->subject == $subjec->id) {{$subjec->sub_name}} @endif
								@endforeach
								@endif</td>							
								
								<td><a class="icon-pencil" title="" href="{{url("/assign_subject/edit/$assi_sub->id")}}"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" onclick="return confirmDel()" title="" href="{{url("/assign_subject/delete/$assi_sub->id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
		var x=confirm("Are you Sure You Want Delete")
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