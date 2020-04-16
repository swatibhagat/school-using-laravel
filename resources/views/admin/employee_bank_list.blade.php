@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Bank Detail
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Employee</a></li>
		<li><a href="#"> Employee Bank Detail</a></li>        
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
				<a href="{{url("emplyoyee_bank/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Employee Code</th>							  
							  <th>Employee Name</th>
							  <th>Bank Name</th>							  
							  <th>Branch</th>
							  <th>Account No.</th>							   				  
							  <th>IFSC Code</th>							   				  
							  							   				  
							</tr>
							</thead>
							<tbody>
								@if($data != "")	
																
							@foreach ($data as $e_bank)
							<tr>								
								<td>{{$i++}}</td>
								<td>@if($emp!="")@foreach ($emp as $emp_code)
								@if($e_bank->employee_code==$emp_code->emp_id){{$emp_code->emp_code}}@endif
								@endforeach	
								@endif</td>							
								<td>@if($emp!="")
									@foreach ($emp as $emp_name)
										@if($e_bank->employee_name == $emp_name->emp_id)
											{{$emp_name->emp_fname}} {{$emp_name->emp_mid_name}} {{$emp_name->emp_lname}}
										@endif
									@endforeach	
								@endif
								</td>
								<td>{{$e_bank->bank__name}}</td>
								<td>{{$e_bank->	bank_branch}}</td>
								<td>{{$e_bank->bank_account_no}}</td>
								<td>{{$e_bank->bank_ifsc_code}}</td>
								
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