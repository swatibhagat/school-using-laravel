@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	 Attendance
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Students</a></li>
		<li><a href="#"> Attendance</a></li>
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
			
			<form class="form-horizontal" method="post" action="update" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive"> 
					<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Academic Year <span>*<span></label>
                  <div class="col-sm-9">
                     
					 <select name="academic" class="form-control" id="academic">
						<option value="">Select Academic Year</option>
						@if($acadamic_year!="")
							@foreach($acadamic_year as $aca)
						<option value="{{$aca->start_year}}">{{$aca->start_year}}</option>
							@endforeach
						@endif
					 </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class <span>*<span></label>
                  <div class="col-sm-9">
                     
					 <select name="dept" class="form-control" id="course" onchange="fetch_section();">
						<option value="">Select Class</option>
						@if($course!="")
							@foreach($course as $dep)
						<option value="{{$dep->course_id}}">{{$dep->name}}</option>
							@endforeach
						@endif
					 </select>
                  </div>
                </div>
			<div id="batch_block" style="display:none">
			  <div class="form-group" >
                  <label for="inputPassword3" class="col-sm-3 control-label">Section <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="dept" class="form-control" id="batch" >
						<option value="">Select Section</option>
						
					 </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date <span>*<span></label>
                  <div class="col-sm-9">
                      <input name="a_date" class="form-control" onchange="fetch_student();" id="a_date" type="date" placeholder="Enter attendabce date"  required>
                  </div>
                </div>
             </div>

                <div id="txtHint" style="margin-top: 30px;">
				</div>
				
            </div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive" id="btn" style="display:none">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Save</button>
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
<script>
function fetch_section(){
	var course=document.getElementById("course").value;
	var block=document.getElementById("batch_block").style.display="block";
	var batch=document.getElementById("batch").value;
	var att_date=document.getElementById("a_date").value;
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
	  xmlhttp.open("GET","select_section/"+course,true);
	  xmlhttp.send();
	}
}

function fetch_student(){
	var academic=document.getElementById("academic").value;
	var course=document.getElementById("course").value;
	var block=document.getElementById("batch_block").style.display="block";
	var batch=document.getElementById("batch").value;
	var att_date=document.getElementById("a_date").value;
	if((batch!="")&&(att_date!="")){
		var str=course+"---"+batch+"---"+academic;
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("txtHint").innerHTML=this.responseText;
		  //document.getElementById("btn").style.display="block";
		}
	  }
	  xmlhttp.open("GET","student_display/"+str,true);
	  xmlhttp.send();
	}
}

function take_attendance(attendance, roll_no){
		var course=document.getElementById("course").value;
		var batch=document.getElementById("batch").value;
		var att_date=document.getElementById("a_date").value;
		if(course!="" &&  batch!="" && att_date!=""){
		  var result=attendance+"---"+roll_no+"---"+att_date+"---"+batch+"---"+course;
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			 alert(this.responseText);
			  
			}
		  }
		  xmlhttp.open("GET","take_attendance/"+result,true);
		  xmlhttp.send();
		}
}


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
/*check box check all*/

$(document).ready(function() {
  $('#checkAll').click(function() {
    var checked = $(this).prop('checked');
    $('#checkboxes').find('input:checkbox').prop('checked', checked);
  });
})
</script>