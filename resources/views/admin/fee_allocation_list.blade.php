@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fee Allocation
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Fees</a></li>
		<li><a href="#">Fee Allocation</a></li>        
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
				<a href="{{url("fee_allocation/add")}}">
					<button type="button" class="btn btn-info pull-right -background-color">Add</button>
				</a>
			</div>		
			<div class="">				 
					<div class="box-body">
						<table id="memTable" class="table table-bordered table-striped">
							<thead>
							<tr>							
							  <th>S. No.</th>
							  <th>Fee Category</th>							  
							  <th>Fee Sub Category</th>							  
							  <th>Fee For</th>							  
							  <th>Class</th>							  
							  <th>Section</th>							  
							   				  
							  <th>Action</th>							   				  
							</tr>
							</thead>
							<tbody><?php $i=1;?>
							@if($data != "")	
																
							@foreach ($data as $cat)
							<tr>								
								<td>{{$i++}}</td>
								<td>@if($cate!="")
									@foreach($cate as $ca)
									@if($cat->fee_cat==$ca->fee_cat_id){{$ca->fee_cat}}	@endif
								@endforeach
								@endif
								</td>
								<td>@if($sub_cat!="")
									@foreach($sub_cat as $sca)
									@if($cat->fee_sub_cat==$sca->fee_sub_cat_id){{$sca->fee_sub_cat}}	@endif
								@endforeach
								@endif
								</td>							
								<td>{{$cat->fee_for}}</td>							
								<td>@if($course!="")
									@foreach($course as $cours)
									@if($cat->course==$cours->course_id){{$cours->name}}	@endif
								@endforeach
								@endif
								
								</td>							
								<td>@if($batch!="")
									@foreach($batch as $batc)
									@if($cat->batch==$batc->batch_id){{$batc->batch_name}}	@endif
								@endforeach
								@endif
								</td>							
								
								<td><a class="icon-pencil" title="" href="{{url("/fee_allocation/edit/$cat->fee_allocation_id")}}"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" onclick="return confirmDel()" title="" href="{{url("/fee_allocation/delete/$cat->fee_allocation_id")}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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