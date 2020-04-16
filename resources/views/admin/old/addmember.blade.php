@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Member
        <small>Join Now</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Member</a></li>
		<li><a href="#">Add Member</a></li>        
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
			<form class="form-horizontal" method="post" action="register" onsubmit="return validate();">					 
              <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Package <span>*<span></label>
                  <div class="col-sm-9">
                    <select class="form-control" name="package" id="package" required>
                     	<option value="">Select Package</option>
						<?php
								foreach ($packs as $pack) {
									echo '<option value="'.$pack->pack_id.'">'.$pack->name.'</option>';
								}
						?>
					</select>
                </div>
				</div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Sponser Id</label>
                  <div class="col-sm-6">
                    <input type="number" name="sponser" id="sponser" data-user="Y" class="form-control" placeholder="Sponser Id">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" name="sponsername" id="sponsername" readonly data-user="Y" class="form-control" placeholder="Sponser Name">
                  </div>				  
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Parent Id</label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" id="parent" data-user="Y" name="parent" placeholder="Parent Id">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" name="parentname" id="parentname" readonly data-user="Y" class="form-control" id="" placeholder="Parent Name">
                  </div>				  
                </div>	                
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label" >Placement</label>
                  <div class="col-sm-9">
						<select class="form-control" name="placement" id="placement" >
							<option value="">Select Position</option>
						    <option value="Left">Left</option>
							<option value="Right">Right</option>														
						</select>						  
                  </div>
                </div> 
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fees Type</label>
                  <div class="col-sm-9">
					<label class="radio-inline"><input type="radio" name="feetype" checked="checked" value="0">Lump Sum</label>
					<label class="radio-inline"><input type="radio" name="feetype" value="1">Installment</label>	
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Admision Fees</label>
                  <div class="col-sm-9">
						<input type="number" name="admisionfees" id="admisionfees"  class="form-control" id="" placeholder="Admision Fees">	
                  </div>
                </div> 				
              </div>
			 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Name <span>*<span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" required placeholder="Full Name">
                  </div>
                </div>	
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Father Name <span>*<span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="fathername" id="fathername"  required placeholder="Father Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Mobile Number <span>*<span></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="mobile" name="mobile" required  placeholder="Mobile Number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Email <span>*<span></label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Full Address</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fulladdress" name="fulladdress" placeholder="Full Address">
                  </div>
                </div>
				<div class="form-group">
				  <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth</label>
				  <div class="col-sm-9">
					<input class="form-control" type="date" value="2011-08-19" name="dob" id="dob">
				  </div>
				</div>	
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Gender </label>
                  <div class="col-sm-9">
						<label class="radio-inline"><input type="radio" checked="checked" value="Male" name="gender">Male</label>
						<label class="radio-inline"><input type="radio" value="Female" name="gender">Female</label> 
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Marital Status </label>
                  <div class="col-sm-9">
						<label class="radio-inline"><input type="radio" checked="checked" name="marital" value="Single">Single</label>
						<label class="radio-inline"><input type="radio" name="marital" value="Married">Married</label> 
                  </div>
                </div>
				                  
              </div>	
			 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive"> 		  
 
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Qualificatin</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="qualification">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Select Category</label>
                  <div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="category" checked="checked" value="Student">Student</label>
						<label class="radio-inline"><input type="radio" name="category" value="Professional">Professional</label>
						<label class="radio-inline"><input type="radio" name="category" value="Businessman">Businessman</label>
						<label class="radio-inline"><input type="radio" name="category" value="Housewife">Housewife</label>
                  </div>
                </div>
                
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Programm opted by the Candidate </label>
                  <div class="col-sm-9">
						<label class="checkbox-inline"><input type="checkbox" name="pobc[]" value="Language Training Program">Language Training Program</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="pobc[]" value="Skill Development Program">Skill Development Program</label><br />
						<label class="checkbox-inline"><input type="checkbox" name="pobc[]" value="Corporate Training Programs">Corporate Training Programs</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="pobc[]" value="Accent Training Programs">Accent Training Programs</label><br />
						<label class="checkbox-inline"><input type="checkbox" name="pobc[]" value="GD/PI Real Distinction Programs">GD/PI Real Distinction Programs</label>
						<label class="checkbox-inline"><input type="checkbox" name="pobc[]" value="Other Programs">Other Programs</label>						
                  </div>
                </div>				 
				<div class="form-group">
				  <label for="inputPassword3" class="col-sm-3 control-label">Batch Time </label>
				  <div class="col-sm-9">
					  <div class="col-sm-6" style="padding-left:0px;padding-right:0px;">
					   <select class="form-control" name="batch1">                     	   
						   <option value="1">01</option>
						   <option value="2">02</option>
						   <option value="3">03</option>
						   <option value="4">04</option>
						   <option value="5">05</option>
						   <option value="6" selected="selected">06</option>
						   <option value="7">07</option>
						   <option value="8">08</option>
						   <option value="9">09</option>
						   <option value="10">10</option>
						   <option value="11">11</option>
						   <option value="12">12</option>						   
						</select>
					  </div>
					  <div class="col-sm-6" style="padding-right:0px;">
					   <select class="form-control" name="batch2">
                     	 <option value="AM">AM</option>
						 <option value="PM">PM</option>
						</select>					  
					  </div>					
				  </div>
				</div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Student Level </label>
                  <div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="studentlevel" checked="checked" value="Basic">Basic</label>
						<label class="radio-inline"><input type="radio" name="studentlevel" value="Fluency">Fluency</label>
						<label class="radio-inline"><input type="radio" name="studentlevel" value="Skills">Skills</label>				 
                  </div>
                </div>
               
			    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Refrence</label>
                  <div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="refrence" checked="checked" value="Hording">Hording</label>
						<label class="radio-inline"><input type="radio" name="refrence" value="Friend">Friend</label>
						<label class="radio-inline"><input type="radio" name="refrence" value="News Paper">News Paper</label>
						<label class="radio-inline"><input type="radio" name="refrence" value="Seminar">Seminar</label>
                  </div>
                </div>
				
																											  
			  </div>		  
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Join Now</button>
              </div>
              <!-- /.box-footer -->
			  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
          </div></div>
			<div class="col-md-3"></div>
		</div>
		<script type="text/javascript">			 		
		 function validate(){
		 	 var sponser = document.getElementById("sponser");
			 var sponsername = document.getElementById("sponsername");
			 var placeunder = document.getElementById("parent");
			 var placeundername = document.getElementById("parentname");
			 var placement = document.getElementById("placement");
			 if(sponsername.value =="" || placeundername.value =="") {
			  	alert("Please fill Sponcer and Parent If not then put 0 for both");
			    return false;					
			 } else if(sponser.value == 0 && placeunder.value > 0) {
			  	alert("Sponcer should be same as parent");
				return false;			
			 } else if(sponser.value > 0 && placeunder.value == 0) {
			  	alert("Parent should be same as sponcer");
				return false;			    					
			 } else {
				if((sponser.value !=0 || placeunder.value !=0) && placement.value =="") {
					alert("Please select position");
					return false;		
				}  				 
			 } 
		 
		 }
		  
		  var sponser = document.getElementById("sponser"); 
		  var sponsername = document.getElementById("sponsername");
		  sponser.addEventListener("blur", function(el){
			if(sponser.value !="") {
				$.ajax({
					url: "isuser",
					data: {user: el.target.value},
					type: "GET",
					dataType : "json",
				}).done(function( data ) {
				  if(data.result=="sucess"){
					sponsername.value = data.name;
					sponsername.style.border = '1px solid darkgreen';
				  } else {					  
					sponsername.value = "";
					sponsername.style.border ='none';
				  }
				});
			} else {
				sponsername.value = "";
				sponsername.style.border = 'none';
			}				
		  });
		  var placeunder = document.getElementById("parent");
		  var placeundername = document.getElementById("parentname");
 		  placeunder.addEventListener("blur", function(el){
			if(placeunder.value !="") {
				$.ajax({
					url: "isuser",
					data: {user: el.target.value},
					type: "GET",
					dataType : "json",
				}).done(function( data ) {
				  if(data.result=="sucess"){
					placeundername.value = data.name;
					placeundername.style.border = '1px solid darkgreen';
				  } else {					  
					placeundername.value = "";
					placeundername.style.border = 'none';
				  }
				});
			} else {
				placeundername.value = "";
				placeundername.style.border = 'none';
			}				
		  });		  
		</script>	
   
    </section>
    <!-- /.content -->
  </div>  
@endsection