@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Student Admission
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Student</a></li>
		
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
			<form class="form-horizontal" method="post" action="create" enctype="multipart/form-data">	


			
                 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive"> 
	
				 <div class="col-sm-12">
				 <div class="form-group">
                  <h3 style="margin-left: 25px;">Official Detail</h3>
               </div>
				<div class="col-sm-6">
               
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Acadamic Year<span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="acadamic_year" class="form-control" type="text" placeholder="Enter Acadamic Year" required-->
					 <select name="acadamic_year" class="form-control">
						<option value="">Select Acadamic Year</option>
						@if($academic!="")
							@foreach($academic as $academi)
								<option value="{{$academi->start_year}}">{{$academi->start_year}}</option>
							@endforeach
						@endif
						
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Register Number <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="reg_no" class="form-control" type="text" placeholder="Enter Register Number" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Admission Date<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="doj" class="form-control" type="date" placeholder="Enter Joining Date" required>
					 
				  </div>
               </div>
			   
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_desi" class="form-control" type="text" placeholder="Enter Employee Designation"-->
					 
					  <select name="course" id="course" class="form-control" onchange="fetch_section();" required>
						<?php //echo $desi;?>
						 <option value="">Select Class</option>
					@if($course != "")
						 @foreach($course as $cours)
					 <option value="{{$cours->course_id}}">{{$cours->name}}</option>
						@endforeach
					@endif
					 </select>
				  
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section <span>*<span></label>
                  <div class="col-sm-9">
                    <select name="batch" id="batch" class="form-control" required>
						
						 <option value="">Select section</option>
					
					 </select>
				  </div>
               </div>
			   <!--div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Admission In Class <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="qualification" class="form-control" type="text" placeholder="Enter Admission In Class" required-->
					 <!--select name="qualification" class="form-control" required>
							<option value="">Select Admission In Class</option>
							<?php for($i=1;$i<=12;$i++){?>
							<option value="<?php //$i;?>">{{$i}}</option>
							<?php }?>
					 </select>
				 </div>
               </div-->
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Roll Number <span><span></label>
                  <div class="col-sm-9">
                     <input name="roll_no" class="form-control" type="text" placeholder="Enter Roll Number" >
				  </div>
               </div>
               </div>
			   <div class="col-sm-12">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Previous School</h3>
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">School Name <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="s_name" class="form-control" type="text" placeholder="Enter School Name"></textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> School Address <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="s_add" class="form-control" type="text" placeholder="Enter School Address"></textarea>
				  </div>
               </div>
               </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Previous Qualification <span><span></label>
                  <div class="col-sm-9">
                     <!--input name="p_quali" class="form-control" type="text" placeholder="Enter Previous Qualification" required-->
						<select name="p_quali" class="form-control">
							 <option value="">Select Previous Qualification</option>
								@if($course != "")
									 @foreach($course as $cours)
								 <option value="{{$cours->course_id}}">{{$cours->name}}</option>
									@endforeach
								@endif
						</select>
				  </div>
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
                     <input name="fname" class="form-control" type="text" placeholder="Enter First Name" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Middle Name <span><span></label>
                  <div class="col-sm-9">
                     <input name="mname" class="form-control" type="text" placeholder="Enter Middle Name">
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Last Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="lname" class="form-control" type="text" placeholder="Enter Last Name" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Date of Birth <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="dob" class="form-control" type="date" placeholder="Enter Date of Birth" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Gender <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_gender" class="form-control" type="text" placeholder="Enter Employee Gender"-->
					 <select name="gender" class="form-control" required>
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Blood Group <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_gender" class="form-control" type="text" placeholder="Enter Employee Gender"-->
					 <select name="blood" class="form-control" required>
						<option value="">Select Blood Group</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					 </select>
				  </div>
               </div> 
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Father's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="parent_name" class="form-control" type="text" placeholder="Enter Father's Name" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Mother's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="p_aadhar" class="form-control" type="text" placeholder="Enter Mother's Name" required>
				  </div>
               </div>
			   </div>
			   <div class="col-sm-6">
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Birth Place<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="b_place" class="form-control" type="text" placeholder="Enter Birth Place" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Nationality <span>*<span></label>
                  <div class="col-sm-9">
                    <select name="nationality" class="form-control" type="text"  required>
						<?php //echo $desi;?> <option value="">Select Nationality</option>
						<option value="India">India</option>
					<?php /*?>@if($country != "")
						 @foreach($country as $countr)
					 <option value="{{$countr->country_id}}">{{$countr->country_name}}</option>
						@endforeach
					@endif<?php */?>
					 </select>
				  </div>
               </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Mother Tonge <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="m_tonge" class="form-control" type="text" placeholder="Enter Mother Tonge" required>
				  </div>
               </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Category <span>*<span></label>
                  <div class="col-sm-9">
                      <select name="category" class="form-control" type="text"  required>
						<?php //echo $desi;?> <option value="">Select Category</option>
					@if($cat != "")
						 @foreach($cat as $category)
					 <option value="{{$category->stu_id}}">{{$category->stu_category}}</option>
						@endforeach
					@endif
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Religion <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="religion" class="form-control" type="text" placeholder="Enter Religion" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Cast <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="Cast" class="form-control" type="text" placeholder="Enter Cast" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Aadhar Number <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="aadhar" class="form-control" type="text" placeholder="Enter Aadhar Number" required>
				  </div>
               </div>
			    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Student's Photo <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="photo" class="form-control" type="file" required>
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
                     <textarea name="present_add" class="form-control" type="text" placeholder="Enter Present Address" required></textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Permanent Address <span><span></label>
                  <div class="col-sm-9">
                     <textarea name="parmanent_add" class="form-control" type="text" placeholder="Enter Permanent Address"></textarea>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> City <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="city" class="form-control" type="text" placeholder="Enter City" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Pin <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="pin" class="form-control" type="text" placeholder="Enter Pin" required>
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
						<option value="India">India</option>
					<?php /*?>@if($country != "")
						 @foreach($country as $countr)
					 <option value="{{$countr->country_id}}">{{$countr->country_name}}</option>
						@endforeach
					@endif<?php */?>
					 </select>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">State <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="state" class="form-control" type="text" placeholder="Enter Employee state">
					  <!--select name="state" class="form-control" type="text"  required>
						
					@if($state != "")
						
					
						 @foreach($state as $state1)
					 <option value="{{$state1->city_id}}">{{$state1->state}}</option>
						@endforeach
					@endif
					 </select-->
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Phone <span><span></label>
                  <div class="col-sm-9">
                     <input name="phone" class="form-control" type="text" placeholder="Enter Phone"  >
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Mobile <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="mobile" class="form-control" type="text" placeholder="Enter Mobile" title="Enter 10 digit number" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Email <span><span></label>
                  <div class="col-sm-9">
                     <input name="email" class="form-control" type="email" placeholder="Enter Email" >
				  </div>
               </div>
               </div>
			   </div>
			  
			   <div class="col-sm-12">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Parent's Detail</h3>
               </div>
			   <div class="col-sm-6">
			   
			    
			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Gardian's Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_name" class="form-control" type="text" placeholder="Enter Present's Name" required>
				  </div>
               </div>		
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Gardian's Contact No. <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_contact" class="form-control" type="text" pattern="[0-9]{10}" placeholder="Enter Present's Contact No." required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Occupation <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_job" class="form-control" type="text" placeholder="Enter Present's Job" required>
				  </div>
               </div>	
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Parents's Photo <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="parent_photo" class="form-control" type="file" required>
				  </div>
               </div>
			   </div>	
			<div class="col-sm-6">			   
			   
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Income <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="income" class="form-control" type="text" placeholder="Enter Income" required>
				  </div>
               </div>			   
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's email <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_email" class="form-control" type="email" placeholder="Enter Present's email" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Present's Unique Identity <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="present_identity" class="form-control" type="text" placeholder="Enter Present's Unique Identity" required>
				  </div>
               </div>
			   <div class="form-group">
				<div style="text-align:center">
                  <label for="inputPassword3" class="col-sm-12" control-label" style="color: red;"><span>*<span><i>
				  If More than one kid in the school then use same identity proof as earlier. </i></label>
                </div>  
               
               </div>
               </div>
               </div>
               
			  <div class="col-sm-12">
			   <div class="form-group">
                  <h3 style="margin-left: 25px;">Other Detail</h3>
               </div>
			  <div class="col-sm-6">
			  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Admission Fees <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="fees" class="form-control" type="text" placeholder="Enter Admission Fees" required>
				  </div>
               </div>
			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Tranport <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="check" type="checkbox" checked required>
				  </div>
               </div>
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
   <script>
function fetch_section(){
	var course=document.getElementById("course").value;
	var batch=document.getElementById("batch").value;
	if(course!=""){
		var str=course+"---"+batch;
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		 //alert(this.responseText);
		  document.getElementById("batch").innerHTML=this.responseText;
		  //document.getElementById("btn").style.display="block";
		}
	  }
	  xmlhttp.open("GET","select_section_for_reg/"+course,true);
	  xmlhttp.send();
	}
}
</script>
@endsection