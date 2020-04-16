@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Employee Registration
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee List</a></li>
		<li><a href="#">Employee Registration</a></li>
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
			<form class="form-horizontal" method="post" action="update" enctype="multipart/form-data">	

			@if($data!="")
				@foreach($data as $dataget)
                 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
               <div class="form-group">
                  
				  
                  
                  <div class="col-sm-9" style="float: right;">
                     <img style="float: right;" src="{{URL::to('/')}}/upload/{{$dataget->emp_photo}}" width="100" height="100" alt="Profile Image"></img>
				  </div>
					<h3 style="margin-left: 25px;">Employee Details</h3>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Code <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_code" class="form-control" type="text" placeholder="Enter Employee Code" value="{{$dataget->emp_code}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Joining Date <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_doj" class="form-control" type="date" placeholder="Enter Joining Date" value="{{$dataget->emp_doj}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Department <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="emp_dept" class="form-control" type="text" placeholder="Employee Department"  >
						<?php //echo $desi;?>
					@if($dept != "")
						 @foreach($dept as $dept)
					 <option value="{{$dept->dept_id}}" <?php if($dataget->emp_dept == $dept->dept_id){echo "selected";} ?> >{{$dept->dept_name}}</option>
						@endforeach
					@endif
					 </select>
					 
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Designation <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_desi" class="form-control" type="text" placeholder="Enter Employee Designation"-->
					 
                     <select name="emp_desi" class="form-control" type="text" placeholder="Employee Designation" >
						<?php //echo $desi;?>
					@if($desi != "")
						 @foreach($desi as $des)
					 <option value="{{$des->desi_id}}" <?php if($dataget->emp_designation == $des->desi_id){echo "selected";} ?> >{{$des->desi_name}}</option>
						@endforeach
					@endif
					 </select>
					 
				  
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Qualification <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_qualification" class="form-control" type="text" placeholder="Enter Employee Qualification" value="{{$dataget->emp_qualification}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Total Experience <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_experience" class="form-control" type="text" placeholder="Enter Employee Experience" value="{{$dataget->emp_exp}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Type <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_utype" class="form-control" type="text" placeholder="Enter Employee User Type"-->
					  <select name="emp_utype" class="form-control" type="text" placeholder="Employee Designation" value="{{$dataget->emp_user_type}}" required>
						<?php //echo $desi;?>
					@if($etype != "")
						 @foreach($etype as $emp_type)
					 <option value="{{$emp_type->emp_id}}" <?php if($dataget->emp_user_type == $emp_type->emp_id){echo "selected";} ?>>{{$emp_type->emp_type}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                 <label> <h3 style="margin-left: 25px;">Personal Detail</h3></label>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee First Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_fname" class="form-control" type="text" placeholder="Enter First Name" value="{{$dataget->emp_fname}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Middle Name <span><span></label>
                  <div class="col-sm-9">
                     <input name="emp_mname" class="form-control" type="text" placeholder="Enter Middle Name" value="{{$dataget->emp_mid_name}}">
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Last Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_lname" class="form-control" type="text" placeholder="Enter Last Name" value="{{$dataget->emp_lname}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Date of Birth <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_dob" class="form-control" type="date" placeholder="Enter Employee Date of Birth" value="{{$dataget->emp_dob}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Gender <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_gender" class="form-control" type="text" placeholder="Enter Employee Gender" value="{{$dataget->emp_gender}}" required-->
				  <select name="emp_gender" class="form-control">
						<option value="" <?php if($dataget->emp_gender == ""){echo "selected";} ?> >Select Gender</option>
						<option value="Male" <?php if($dataget->emp_gender == "Male"){echo "selected";} ?>>Male</option>
						<option value="Female" <?php if($dataget->emp_gender == "Female"){echo "selected";} ?>>Female</option>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Contact Detail</h3>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Present Address <span>*<span></label>
                  <div class="col-sm-9">
                     <textarea name="emp_present_add" class="form-control" type="text" placeholder="Enter Employee Present Address" required>{{$dataget->emp_present_add}}</textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Permanent Address <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="emp_parmanent_add" class="form-control" type="text" placeholder="Enter Employee Permanent Address">{{$dataget->emp_permanent_add}}</textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee City <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_city" class="form-control" type="text" placeholder="Enter Employee City" value="{{$dataget->emp_city}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Pin <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_Pin" class="form-control" type="text" placeholder="Enter Employee Pin" value="{{$dataget->emp_pin}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Country <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_country" class="form-control" type="text" placeholder="Enter Employee Country"-->
					 <select name="emp_country" class="form-control" type="text" placeholder="Employee Country" required>
					<option value="">Select Country</option>
					<option value="India" @if($dataget->emp_country == "India" ) selected @endif >India</option>
					<?php /*?>
					@if($country != "")
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
                     <input name="emp_state" class="form-control" type="text" placeholder="Enter Employee state" value="{{$dataget->emp_state}}">
					<?php /*?>  <select name="emp_state" class="form-control" type="text" placeholder="Employee Country" required>
						
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
                     <input name="emp_phone" class="form-control" type="text" placeholder="Enter Employee Phone" value="{{$dataget->emp_phone}}" pattern="[0-9]{11}">
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Mobile <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_mobile" class="form-control" type="text" placeholder="Enter Employee Mobile"  pattern="^\d{10}$" value="{{$dataget->emp_mobile}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Email <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_email" class="form-control" type="email" placeholder="Enter Employee Email" value="{{$dataget->emp_email}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Photo <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_photo" class="form-control" type="file"  >
				  </div>
               </div>
			   
			   <input type="hidden" name="token" value="{{ $dataget->emp_id }}" />
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
          </div>
		  </div>
			<div class="col-md-3"></div>
		</div>  
    </section>
    <!-- /.content -->
  </div>  
@endsection