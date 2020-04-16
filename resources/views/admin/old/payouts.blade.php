@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payouts
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Payout</a></li>
		<li><a href="#">Payouts List</a></li>        
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
							  <th>Closing Id</th>
							  <th>Members</th>							  
							  <th>Total Amount</th>
							  <th>Laps Amount</th>							  
							  <th>Amount</th>
							  <th>Date</th>
							  <th>Action</th>							  							  
							</tr>
							</thead>
							<tbody> 
							@if($data != "")
								@foreach ($data as $closing)
								<tr>								
									<td>{{$i++}}</td>															
									<td>{{$closing->closingid}}</td>
									<td>{{$closing->totalmember}}</td>
									<td>{{$closing->price + $closing->lapsprice}}</td>
									<td>{{$closing->lapsprice}}</td>
									<td>{{$closing->price}}</td>
									<td>{{$closing->date}}</td>
									<td>
										<form class="form-horizontal -margin-top-twentyfive" method="get" action="closingdetail" >
											<div class="col-sm-offset-2 col-sm-10">
												<input type="hidden" name="closingid" value="{{$closing->closingid}}" >
												<button type="submit" class="btn btn-danger">View</button>
											</div>
										</form>	
									</td>
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