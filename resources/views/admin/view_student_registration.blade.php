@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Student Admission
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Student</a></li>
		<li><a href="#">Student List</a></li>
		<li><a href="#">Student Admission</a></li>        
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

				@if($data != "")
						 @foreach($data as $dat)
			
                 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">    
				<div class="col-sm-12">
				<div class="form-group">
                   <div class="col-sm-6" style="float: right;">
                     <img style="float: right;" src="{{URL::to('/')}}/upload/{{$dat->photo}}" width="100" height="100" alt="Profile Image"></img>
				  </div>
					<h3 style="margin-left: 25px;">Official Detail</h3>
               </div>
				<div class="col-sm-6">
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Acadamic Year<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="acadamic_year" class="form-control" type="text" placeholder="Enter Acadamic Year" value="{{$dat->acadmic_year}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Register No. <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="reg_no" class="form-control" type="text" placeholder="Enter Register Number" value="{{$dat->registration_no}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Admission Date<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="doj" class="form-control" type="date" placeholder="Enter Joining Date" value="{{$dat->doj}}"  required>
					 
				  </div>
               </div>
			   
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_desi" class="form-control" type="text" placeholder="Enter Employee Designation"-->
					 
					  <select name="course" class="form-control" required>
						<?php //echo $desi;?>
						 <option value="">Select Class</option>
					@if($course != "")
						 @foreach($course as $cours)
					 <option value="{{$cours->course_id}}" @if($cours->course_id==$dat->course)selected @endif>{{$cours->name}}</option>
						@endforeach
					@endif
					 </select>
				  
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section <span>*<span></label>
                  <div class="col-sm-9">
                    <select name="batch" class="form-control" required>
						<?php //echo $desi;?>
						 <option value="">Select Section</option>
					@if($batch != "")
						 @foreach($batch as $batc)
					 <option value="{{$batc->batch_id}}" @if($batc->batch_id==$dat->batch)selected @endif >{{$batc->batch_name}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			    <!--div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Admission In Class <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="qualification" class="form-control" type="text" placeholder="Enter Admission In Class" value="{{$dat->qualification}}" required>
				  </div>
               </div-->
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Roll Number <span><span></label>
                  <div class="col-sm-9">
                     <input name="roll_no" class="form-control" type="text" placeholder="Enter Roll Number" value="{{$dat->roll_no}}" >
				  </div>
               </div>
               </div>
               </div>
			   <div class="col-sm-12">
			   <div class="form-group">
                 <h4 style="margin-left: 25px;">Previous School</h4> 
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">School Name <span>*<span></label>
                  <div class="col-sm-9">
                     <textarea name="s_name" class="form-control" type="text" placeholder="Enter School Name" required>{{$dat->p_school}}</textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> School Address <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="s_add" class="form-control" type="text" placeholder="Enter School Address">{{$dat->p_school_add}}</textarea>
				  </div>
               </div>
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Previous Qualification <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="p_quali" class="form-control" type="text" placeholder="Enter Previous Qualification" value="{{$dat->p_qualification}}" required>
				  </div>
               </div>
               </div>
			   
			   
			  <div class="col-sm-12">
				<div class="form-group">
                  <h3 style="margin-left: 25px;">Personal Details</h3>
               </div>
			  <div class="col-sm-6">
			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> First Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="fname" class="form-control" type="text" placeholder="Enter First Name" value="{{$dat->fname}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Middle Name <span><span></label>
                  <div class="col-sm-9">
                     <input name="mname" class="form-control" type="text" placeholder="Enter Middle Name" value="{{$dat->mname}}">
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Last Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="lname" class="form-control" type="text" placeholder="Enter Last Name" value="{{$dat->lname}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Date of Birth <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="dob" class="form-control" type="date" placeholder="Enter Date of Birth" value="{{$dat->dob}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Gender <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_gender" class="form-control" type="text" placeholder="Enter Employee Gender"-->
					 <select name="gender" class="form-control" required>
						<option value="">Select Gender</option>
						<option value="Male"  @if($dat->gender=="Male")selected @endif >Male</option>
						<option value="Female"  @if($dat->gender=="Female")selected @endif >Female</option>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Blood Group <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_gender" class="form-control" type="text" placeholder="Enter Employee Gender"-->
					 <select name="blood" class="form-control" required>
						<option value="">Select Blood Group</option>
						<option value="A+" @if($dat->gender=="A+")selected @endif>A+</option>
						<option value="A-" @if($dat->gender=="A-")selected @endif>A-</option>
						<option value="B+" @if($dat->gender=="B+")selected @endif>B+</option>
						<option value="B-" @if($dat->gender=="B-")selected @endif>B-</option>
						<option value="O+" @if($dat->gender=="O+")selected @endif>O+</option>
						<option value="O-" @if($dat->gender=="O-")selected @endif>O-</option>
						<option value="AB+" @if($dat->gender=="AB+")selected @endif>AB+</option>
						<option value="AB-" @if($dat->gender=="AB-")selected @endif>AB-</option>
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
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Birth Place<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="b_place" class="form-control" type="text" placeholder="Enter Birth Place" value="{{$dat->birth_place}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Nationality <span>*<span></label>
                  <div class="col-sm-9">
                    <select name="nationality" class="form-control" type="text"  required>
						<?php //echo $desi;?> <option value="">Select Nationality</option>
						<option value="India" @if($dat->nationality == "India") selected @endif  >India</option>
					<?php /*@if($country != "")
						 @foreach($country as $countr)
					 <option value="{{$countr->country_id}}" @if($dat->nationality==$countr->country_id)selected @endif >{{$countr->country_name}}</option>
						@endforeach
					@endif*/ ?>
					 </select>
				  </div>
               </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Mother Tonge <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="m_tonge" class="form-control" type="text" placeholder="Enter Mother Tonge" value="{{$dat->mother_tongue}}" required>
				  </div>
               </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Category <span>*<span></label>
                  <div class="col-sm-9">
                      <select name="category" class="form-control" type="text"  required>
						<?php //echo $desi;?> <option value="">Select Category</option>
					@if($cat != "")
						 @foreach($cat as $category)
					 <option value="{{$category->stu_id}}" @if($dat->category==$category->stu_id)selected @endif >{{$category->stu_category}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Religion <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="religion" class="form-control" type="text" placeholder="Enter Religion" value="{{$dat->religion}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Cast <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="Cast" class="form-control" type="text" placeholder="Enter Cast" value="{{$dat->cast}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Aadhar No. <span><span></label>
                  <div class="col-sm-9">
                     <input name="aadhar" class="form-control" type="text" placeholder="Enter Aadhar Number" value="{{$dat->stu_aadhar}}" required>
				  </div>
               </div>
			   </div>
			   </div>
			   <div class="col-sm-12">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Contact Detail</h3>
               </div>
			   <div class="col-sm-6">
			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present Address <span>*<span></label>
                  <div class="col-sm-9">
                     <textarea name="present_add" class="form-control" type="text" placeholder="Enter Present Address" required>{{$dat->present_add}}</textarea>
				  </div>
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
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Country <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_country" class="form-control" type="text" placeholder="Enter Employee Country"-->
					<select name="country" class="form-control" type="text"  required>
						<?php //echo $desi;?> <option value="">Select Country</option>
						<option value="India" @if($dat->country=="India")selected @endif >India</option>
					<?php /*@if($country != "")
						 @foreach($country as $countr)
					 <option value="{{$countr->country_id}}" @if($dat->country==$countr->country_id)selected @endif>{{$countr->country_name}}</option>
						@endforeach
					@endif */?>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">State <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="state" class="form-control" type="text" placeholder="Enter Employee state" value="{{$dat->state}}">
					  <!--select name="state" class="form-control" type="text"  required>
						
					@if($state != "")
						
					
						 @foreach($state as $state1)
					 <option value="{{$state1->city_id}}" @if($dat->state==$state1->city_id)selected @endif >{{$state1->state}}</option>
						@endforeach
					@endif
					 </select-->
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Phone <span><span></label>
                  <div class="col-sm-9">
                     <input name="phone" class="form-control" type="text" placeholder="Enter Phone" value="{{$dat->phone}}" >
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Mobile <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="mobile" class="form-control"  pattern="^\d{10}$" type="text" placeholder="Enter Mobile" value="{{$dat->mobile}}" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Email <span><span></label>
                  <div class="col-sm-9">
                     <input name="email" class="form-control" type="email" placeholder="Enter Email" value="{{$dat->email}}" required>
				  </div>
               </div>
               </div>
			  
			   
               </div>
			   @if($data_parent!="")
				    @foreach($data_parent as $da)
				    <?php $dat->parent_id;
			  $student_info=explode(",",$dat->parent_id);
			  for($i=0;$i<count($student_info);$i++){
				  if($student_info[$i]==$da->parent_id){
					 ?>
					 
			   <div class="col-sm-12">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Parent's Detail</h3>
               </div>
			   <div class="col-sm-6">

			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Gardian's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_add" class="form-control" type="text" placeholder="Enter Present's Name" value="{{$da->f_name}}" required>
				  </div>
               </div>		
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Gardian's Contact No. <span>*<span></label>
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
               </div>	
			   <div class="col-sm-6">
			   
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
               </div>
					 <?php
				  }
			  }
			  ?>
				  
			 
			   
			   @endforeach
					@endif
			   <div class="col-sm-12">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Other Detail</h3>
               </div>
			  <div class="col-sm-6">
			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Admission Fees <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="fees" class="form-control" type="text" placeholder="Enter Admission Fees" pattern="[0-9]{5}" value="{{$dat->fees}}" required>
				  </div>
               </div>
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Tranport <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="check" type="checkbox" @if($dat->transport == "on")checked @endif  required>
				  </div>
               </div>
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