@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Total Business
        <small>sell</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Payout</a></li>
		<li><a href="#">Total Business</a></li>        
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
							<tbody>						 
							<tr>								
								<td><strong>Total Members</strong></td>
								<td>{{$data["students"]}}</td>
								<td>
									<form class="form-horizontal -margin-top-twentyfive" method="get" action="memberlist" >
										<div class="col-sm-offset-2 col-sm-10">											 
											<button type="submit" class="btn btn-danger">View</button>
									</div>
									</form>
								</td>								
							</tr>
							<tr>								
								<td><strong>Income</strong></td>
								<td>{{$data["income"]}} Rs.</td>
								<td>
									<form class="form-horizontal -margin-top-twentyfive" method="get" action="memberlist" >
										<div class="col-sm-offset-2 col-sm-10">											 
											<button type="submit" class="btn btn-danger">View</button>
									</div>
									</form>
								</td>			
							</tr>							
							<tr>								
								<td><strong>Direct Income</strong></td>
								<td>{{$data["directincome"]}} Rs.</td>
								<td>
									<form class="form-horizontal -margin-top-twentyfive" method="get" action="directincomedetail" >
										<div class="col-sm-offset-2 col-sm-10">											 
											<button type="submit" class="btn btn-danger">View</button>
									</div>
									</form>
								</td>								
							</tr>
							<tr>								
								<td><strong>Pair Income</strong></td>
								<td>{{$data["pairincome"]}} Rs.</td>
								<td>
									<form class="form-horizontal -margin-top-twentyfive" method="get" action="pairincomedetail" >
										<div class="col-sm-offset-2 col-sm-10">											
											<button type="submit" class="btn btn-danger">View</button>
									</div>
									</form>
								</td>								
							</tr>

							<tr>								
								<td><strong>Total Income</strong></td>
								<td colspan="2">{{$data["income"] - $data["pairincome"] - $data["directincome"]}} Rs.</td>																	 							
							</tr>							
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