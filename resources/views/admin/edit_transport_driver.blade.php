@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	 Driver
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transport</a></li>
		<li><a href="#"> Driver</a></li>
		<li><a href="#">Edit</a></li>        
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
			<form class="form-horizontal" method="post" action="update" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive"> 
				@if($data!="") 
					@foreach($data as $driver)
				  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Number <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="vehicle_no" class="form-control" type="text" placeholder="Enter Vehicle Number" value="{{$driver->vehicle_no}}" required-->
					 <select  name="vehicle_no" class="form-control" required>
						<option value="">Select Vehicle Number</option>
						@if($data1!="")
							@foreach($data1 as $dat)
						<option value="{{$dat->v_id}}" @if($driver->vehicle_no == $dat->v_id) selected @endif >{{$dat->vehicle_no}}</option>
							@endforeach
						@endif
					 </select>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Name of driver<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="driver_name" class="form-control" type="text" placeholder="Enter No. of Seat" value="{{$driver->drive_name}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">License No. <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="license_no" class="form-control" type="text" placeholder="Enter Maximum Allow " value="{{$driver->license_no}}" required>
					 
                  </div>
                </div>
				<input type="hidden" name="token" value="{{ $driver->d_id }}" />
				@endforeach
				@endif
			<div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Update</button>
              </div>
              <!-- /.box-footer -->
			  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
          </div></div>
			<div class="col-md-3"></div>
		</div>  
    </section>
    <!-- /.content -->
  </div>  
@endsection