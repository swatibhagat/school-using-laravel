@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Parent's Detail
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Student</a></li>
		
		<li><a href="#">Parent's Detail</a></li>        
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
			<form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">	

				
			
                 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">    
				 @if($data_parent!="")
				   @foreach($data_parent as $da)
			   <div class="col-sm-12" style="text-align: center;">
				
                   
                     <img  src="{{URL::to('/')}}/upload/{{$da->p_image}}" width="150" height="120" alt="Profile Image"></img>
				  
					
               
               </div>
			   <div class="col-sm-6">
			    <div class="form-group">
                  <h3 style="margin-left: 25px;">Parent's Detail</h3>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="text" placeholder="Enter Present's Name" value="{{$da->f_name}}" required>
				  </div>
               </div>		
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's Contact No. <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="text" placeholder="Enter Present's Contact No." value="{{$da->f_mobile}}" required>
				  </div>
               </div>		
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Occupation <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="text" placeholder="Enter Occupation" value="{{$da->f_job}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Income <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="income" class="form-control" type="text" placeholder="Enter Income" value="{{$da->income}}" required>
				  </div>
               </div>		
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's email <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="email" placeholder="Enter Present's email" value="{{$da->f_email}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's Unique Identity <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="text" placeholder="Enter Present's Unique Identity" value="{{$da->f_aadhar}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's Password <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="text" placeholder="Enter Password" value="{{$da->p_pass}}" required>
				  </div>
               </div>
               </div>
			  
			   	@endforeach
					@endif		
							
				
				@if($data != "")
						 @foreach($data as $dat)
			   <div class="col-sm-6">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Contact Detail</h3>
               </div>
			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Permanent Address <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="parmanent_add" class="form-control" type="text" placeholder="Enter Permanent Address">{{$dat->permanent_add}}</textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> City <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="city" class="form-control" type="text" placeholder="Enter City" value="{{$dat->city}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Pin <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="pin" class="form-control" type="text" placeholder="Enter Pin" pattern="[0-9]{5}" value="{{$dat->pin}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Country <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_country" class="form-control" type="text" placeholder="Enter Employee Country"-->
					<select name="country" class="form-control" type="text"  required>
						<?php //echo $desi;?> <option value="">Select Country</option>
					@if($country != "")
						 @foreach($country as $countr)
					 <option value="{{$countr->country_id}}" @if($dat->country==$countr->country_id)selected @endif>{{$countr->country_name}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">State <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_state" class="form-control" type="text" placeholder="Enter Employee state"-->
					  <select name="state" class="form-control" type="text"  required>
						
					@if($state != "")
						
					
						 @foreach($state as $state1)
					 <option value="{{$state1->city_id}}" @if($dat->state==$state1->city_id)selected @endif >{{$state1->state}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Father's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="parent_name" class="form-control" type="text" placeholder="Enter Father's Name" value="{{$dat->father_name}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Mother's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="p_aadhar" class="form-control" type="text" placeholder="Enter Mother's Name" value="{{$dat->mother_name}}" required>
				  </div>
               </div>
               </div>
			   @endforeach
					@endif
			  
			<div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <!--button type="submit" class="btn btn-info pull-right -background-color">Add</button-->
              </div>
              <!-- /.box-footer -->
			  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </div></div>
			</form>
          
		  
			<div class="col-md-3"></div>
		</div>  
    </section>
    <!-- /.content -->
  </div>  
@endsection