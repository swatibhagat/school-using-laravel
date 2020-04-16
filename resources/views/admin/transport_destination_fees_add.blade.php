@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Add Destination and Fees
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transport</a></li>
		<li><a href="#">Add Destination and Fees</a></li>
		<li><a href="#">Add</a></li>        
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
			<form class="form-horizontal" method="post" action="create" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Route Code<span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="r_code" class="form-control" type="text" placeholder="Enter Route Code" required-->
					<select name="r_code" class="form-control">
					<option value="">Select Route Code</option>
					@if($data !="")
						@foreach($data as $code)
					
						<option value="{{$code->r_id}}">{{$code->code}}</option>
					 
						@endforeach
					@endif
					</select>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Pickup Point<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="pickup" class="form-control" type="text" placeholder="Enter Pickup Point" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Drop Point<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="drop" class="form-control" type="text" placeholder="Enter Drop Point " required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Amount<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="amount" class="form-control" type="text" placeholder="Enter Amount " required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fees Type<span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="f_type" class="form-control" type="text" placeholder="Enter Fees Type " required-->
					 <select name="f_type" class="form-control">
						<option value="">Select Fees Type</option>
						<option value="Annual">Annual</option>
						<option value="Bi-Annual">Bi-Annual</option>
						<option value="Tri-Annual">Tri-Annual</option>
						<option value="Monthly">Monthly</option>
						<option value="Quaterly">Quaterly</option>
						<option value="Half Yearly">Half Yearly</option>
					 </select>
                  </div>
                </div>
			<div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Add</button>
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