@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	 Vehicle
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transport</a></li>
		<li><a href="#">Vehicle</a></li>
		<li><a href="#"> Edit</a></li>        
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
					@foreach($data as $vehicle)
				  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Number <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="vehicle_no" class="form-control" type="text" placeholder="Enter Vehicle Number" value="{{$vehicle->vehicle_no}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">No. of Seat<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="vehicle_seat" class="form-control" type="text" placeholder="Enter No. of Seat" value="{{$vehicle->vehicle_seat}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Maximum Allow <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="max_allow" class="form-control" type="text" placeholder="Enter Maximum Allow " value="{{$vehicle->max_allow}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Contact Person <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="contact" class="form-control" type="text" placeholder="Enter Contact Person" value="{{$vehicle->contact_person}}" required>
					 
                  </div>
                </div>
				<input type="hidden" name="token" value="{{ $vehicle->v_id }}" />
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