@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pair Income
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
		<li><a href="#">Payout</a></li>
		<li><a href="#">Total Business</a></li>
		<li><a href="#">Pair Income List</a></li>        
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
							  <th>SR No.</th>							   
							  <th>Member Id</th>
							  <th>Member Name</th>							  
							  <th>Income Type</th>
							  <th>Add Members</th>
							  <th>Total Amount</th>
							  <th>Laps Amount</th>
							  <th>Amount</th>							  
							  <th>Date</th>							  
							</tr>
							</thead>
							<tbody> 
							@if($data != "")
								@foreach ($data as $closing)
									<tr>								
										<td>{{$i++}}</td>															
										<td>{{$closing->student_id}}</td>
										<td>{{$closing->name}}</td>
										<td>
											@if($closing->income_type == 1)
												Direct Income
											@elseif($closing->income_type == 2)
												Pair Income	
											@elseif($closing->income_type == 3)	
												Reward Income
											@endif									
										</td>
										<td>								 
											{{$closing->pair}}								    
										</td>								
										<td>								 
											{{$closing->income + $closing->lapsprice}}								    
										</td>
										<td>								 
											{{$closing->lapsprice}}								    
										</td>
										<td>								 
											{{$closing->income}}								    
										</td>										
										<td>{{$closing->date}}</td>								
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