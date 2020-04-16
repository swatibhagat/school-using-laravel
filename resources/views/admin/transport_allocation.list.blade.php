@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transport Allocation
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Settings</a></li>
		<li><a href="#">Transport Allocation</a></li>        
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
				<a href="{{url("transport_destination_fee/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Route </th>							  
							  <th>Destination</th>
							  <th>Type</th>
							  <th>Name</th>
							  <th>Start Point</th>							  
							  <th>Stop Point</th>
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody><?php $i=1;?>
							@if($data != "")
								
																
							@foreach ($data as $fees)
							<tr>								
								<td>{{$i++}}</td>
								<td>@if($route != "")
									@foreach ($route as $rout)
								@if($fees->code==$rout->r_id)
								{{$rout->code}}@endif	
								@endforeach	
							@endif	
								</td>
								<td>{{$fees->pickup}}</td>
								<td>{{$fees->drop_point}}</td>
								<td>{{$fees->amount}}</td>
								<td>{{$fees->fee_type}}</td>
								<td><a class="icon-pencil" title="" href="{{url("/transport_destination_fee/edit/$fees->f_id")}}"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" title="" href="{{url("/transport_destination_fee/delete/$fees->f_id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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