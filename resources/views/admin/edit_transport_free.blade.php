@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Add Destination and Fees
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transport</a></li>
		<li><a href="#">Add Destination and Fees</a></li>
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
					@foreach($data as $fee)
				  
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Route Code<span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="r_code" class="form-control" type="text" placeholder="Enter Route Code" required-->
					<select name="r_code" class="form-control">
					<option value="">Select Route Code</option>
					@if($data1 !="")
						@foreach($data1 as $code)
					
						<option value="{{$code->r_id}}" @if($code->r_id==$fee->code) selected @endif >{{$code->code}}</option>
					 
						@endforeach
					@endif
					
					</select>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Pickup Point<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="pickup" class="form-control" type="text" placeholder="Enter Pickup Point" value="{{$fee->	pickup}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Drop Point<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="drop" class="form-control" type="text" placeholder="Enter Drop Point "value="{{$fee->drop_point}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Amount<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="amount" class="form-control" type="text" placeholder="Enter Amount " value="{{$fee->amount}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fees Type<span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="f_type" class="form-control" type="text" placeholder="Enter Fees Type " required-->
					 <select name="f_type" class="form-control">
						<option value="">Select Fees Type</option>
						<option value="Annual" @if($fee->fee_type=="Annual") selected @endif >Annual</option>
						<option value="Bi-Annual" @if($fee->fee_type=="Bi-Annual") selected @endif >Bi-Annual</option>
						<option value="Tri-Annual" @if($fee->fee_type=="Tri-Annual") selected @endif >Tri-Annual</option>
						<option value="Monthly" @if($fee->fee_type=="Monthly") selected @endif >Monthly</option>
						<option value="Quaterly" @if($fee->fee_type=="Quaterly") selected @endif >Quaterly</option>
						<option value="Half Yearly" @if($fee->fee_type=="Half Yearly") selected @endif >Half Yearly</option>
					 </select>
                  </div>
                </div>
				<input type="hidden" name="token" value="{{ $fee->f_id }}" />
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