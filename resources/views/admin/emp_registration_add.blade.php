@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Employee Registration
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee</a></li>
		<li><a href="#">Employee Registration</a></li>
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
			<form class="form-horizontal" method="post" action="create" enctype="multipart/form-data">	


			
                 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
               <div class="form-group">
                  <h3 style="margin-left: 25px;">Employee Details</h3>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Code <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_code" class="form-control" type="text" placeholder="Enter Employee Code" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Joining Date <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_doj" class="form-control" type="date" placeholder="Enter Joining Date" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Department <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="emp_dept" class="form-control" type="text" placeholder="Employee Department" required>
						<?php //echo $desi;?> <option value="">Select Employee Department</option>
					@if($dept != "")
						 @foreach($dept as $dept)
					 <option value="{{$dept->dept_id}}">{{$dept->dept_name}}</option>
						@endforeach
					@endif
					 </select>
					 
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Designation <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_desi" class="form-control" type="text" placeholder="Enter Employee Designation"-->
					 
                     <select name="emp_desi" class="form-control" type="text" placeholder="Employee Designation" required>
						<?php //echo $desi;?> <option value="">Select Employee Designation </option>
					@if($desi != "")
						 @foreach($desi as $des)
					 <option value="{{$des->desi_id}}">{{$des->desi_name}}</option>
						@endforeach
					@endif
					 </select>
					 
				  
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Qualification <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_qualification" class="form-control" type="text" placeholder="Enter Employee Qualification" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Total Experience <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_experience" class="form-control" type="text" placeholder="Enter Employee Experience" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Type <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_utype" class="form-control" type="text" placeholder="Enter Employee User Type"-->
					  <select name="emp_utype" class="form-control" type="text" placeholder="Employee Designation" required>
						<?php //echo $desi;?> <option value="">Select Employee Type</option>
					@if($etype != "")
						 @foreach($etype as $emp_type)
					 <option value="{{$emp_type->emp_id}}">{{$emp_type->emp_type}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                 <h3 style="margin-left: 25px;">Personal Detail</h3>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee First Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_fname" class="form-control" type="text" placeholder="Enter First Name" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Middle Name <span><span></label>
                  <div class="col-sm-9">
                     <input name="emp_mname" class="form-control" type="text" placeholder="Enter Middle Name">
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Last Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_lname" class="form-control" type="text" placeholder="Enter Last Name" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Date of Birth <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_dob" class="form-control" type="date" placeholder="Enter Employee Date of Birth" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Gender <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_gender" class="form-control" type="text" placeholder="Enter Employee Gender"-->
					 <select name="emp_gender" class="form-control" required>
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Contact Detail</h3>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Present Address <span>*<span></label>
                  <div class="col-sm-9">
                     <textarea name="emp_present_add" class="form-control" type="text" placeholder="Enter Employee Present Address" required></textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Permanent Address <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="emp_parmanent_add" class="form-control" type="text" placeholder="Enter Employee Permanent Address"></textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee City <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_city" class="form-control" type="text" placeholder="Enter Employee City" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Pin <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_Pin" class="form-control" type="text" placeholder="Enter Employee Pin" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Country <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_country" class="form-control" type="text" placeholder="Enter Employee Country"-->
					 <select name="emp_country" class="form-control" type="text" placeholder="Employee Country" required>
						<?php //echo $desi;?>
						<option value="">Select Country</option>
						<option value="India">India</option>
					<?/*@if($country != "")
						 @foreach($country as $countr)
					 <option value="{{$countr->country_id}}">{{$countr->country_name}}</option>
						@endforeach
					@endif*/?>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee State <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_state" class="form-control" type="text" placeholder="Enter Employee state">
					<?php /*  <select name="emp_state" class="form-control" type="text"  required>
						
					@if($state != "")
						
					
						 @foreach($state as $state1)
					 <option value="{{$state1->city_id}}">{{$state1->state}}</option>
						@endforeach
					@endif
					 </select>*/?>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Phone <span><span></label>
                  <div class="col-sm-9">
                     <input name="emp_phone" class="form-control" type="text" placeholder="Enter Employee Phone"  >
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Mobile <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_mobile" class="form-control"  pattern="^\d{10}$" title="Enter 10 digit" type="text" placeholder="Enter Employee Mobile" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Email <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_email" class="form-control" type="email" placeholder="Enter Employee Email" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Photo <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_photo" class="form-control" type="file" required>
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