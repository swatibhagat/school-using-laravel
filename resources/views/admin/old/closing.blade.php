@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Closing
        <small>Genrate payout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Payaout</a></li>
		<li><a href="#">Closing</a></li>        
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
					<div class="box-header with-border">
					  <h3 class="box-title">Closing</h3>

					  <div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
						  <i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						  <i class="fa fa-times"></i></button>
					  </div>
					</div>
					<div class="box-body">
					    Are you sure you want to genrate payout?
					  <br>
					  <div class="row">
					  <div class="col-xs-12 text-center">
					    <form class="form-horizontal" method="post" action="genratepayout" onsubmit="return confirmation();" >					 
						 <button type="submit" class="btn btn-default btn-lrg ajax" title="Ajax Request">
							<i class="fa fa-spin fa-refresh"></i>&nbsp; Genrate Payout
						 </button>
						 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					    </form>	
					  </div>
					  </div>
						<div class="ajax-content">
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					   
					</div>
					<!-- /.box-footer-->
			</div>			 
          </div>
		  </div>
			<div class="col-md-3"></div>
		</div>
	
    </section>
    <!-- /.content -->
<script>
	function confirmation() {
		var txt;
		var r = confirm("Are you sure you want to genrate payout?");
		if (r == true) {
			return true;
		} else {
			return false;
		}		
	}
</script>	
  </div>  
@endsection