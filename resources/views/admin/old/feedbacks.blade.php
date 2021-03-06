@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Feedbacks
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Feedbacks List</a></li>	       
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
								<tr >
									<td class="table-header">Sr. No</td>
									<td class="table-header">Subject</td>
									<td class="table-header">Sort Description</td>
									<td class="table-header">Long Description</td>
									<td class="table-header">Date</td>														
								</tr> 
							</thead>							
							<tbody> 
								@if($data != "")
									@foreach ($data as $myfeedback)
									<tr>
										<td>{{$i++}}</td>
										<td>{{$myfeedback->subject}}</td>
										<td>{{$myfeedback->sortDescription}}</td>
										<td>{{$myfeedback->longDescription}}</td>
										<td>{{$myfeedback->date}}</td>									
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
	.content-wrapper{
		height:85vh;
	}
</style>	
  </div>  
@endsection