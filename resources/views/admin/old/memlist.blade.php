@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Members
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Members</a></li>
		<li><a href="#">Members List</a></li>        
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
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>User Id</th>
							  <th>Password</th>							  
							  <th>Name</th>
							  <th>Father Name</th>							  
							  <th>Sponser Id</th>
							  <th>Sponser Name</th>
							  <th>Parent Id</th>
							  <th>Parent Name</th>
							  <th>Package</th>
							  <th>Amount</th>
							  <th>Mobile</th>
							  <th>Left Members</th>
							  <th>Right Members</th>
							  <th>Left Unit</th>
							  <th>Right Unit</th>							  
							  <th>Date</th>							  
							</tr>
							</thead>
							<tbody>
							@if($data != "")							
							@foreach ($data as $user)
							<tr>								
								<td>{{$user->username}}</td>
								<td>{{$user->upassword}}</td>								
								<td>{{$user->name}}</td>
								<td>{{$user->fateher_name}}</td>
								<td>{{$user->sponcer_id}}</td>
								<td>{{$user->sponcer_name}}</td>
								<td>{{$user->parent_id}}</td>
								<td>{{$user->parent_name}}</td>
								<td>{{$user->packname}}</td>
								<td>{{$user->fees}} Rs.</td>
								<td>{{$user->mobile}}</td>
								<td>
									<?php 
										 $lmem = explode(",",$user->lmem);
										 if(count($lmem) > 0){
											 echo count($lmem) -1; 
										 } else {
											 echo count($lmem); 
										 }
									?>
								</td>
								<td>
									<?php 
										 $rmem = explode(",",$user->rmem);
										 if(count($rmem) > 0){
											 echo count($rmem) -1; 
										 } else {
											 echo count($rmem); 
										 }
									?>
								</td>
								<td>{{$user->lunit}}</td>
								<td>{{$user->runit}}</td>								
								<td>{{$user->reg_date}}</td>
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
 
<!-- DataTable --->
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