@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Time Tables
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Time Tables</a></li>
		<li><a href="#">View Time Tables</a></li>
		<li><a href="#">View</a></li>        
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
                  <label for="inputPassword3" class="col-sm-3 control-label">Academic Year <span>*<span></label>
                  <div class="col-sm-9">
				  <select name="academic" id="academic" class="form-control" >
                    <option value="">Select Department</option>
					@if($academic!="")
						 @foreach($academic as $ac)
								<option value="{{$ac->academic_id}}">{{$ac->start_year}}</option>
								
						@endforeach
					 @endif
					 </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class  <span>*<span></label>
                  <div class="col-sm-9">
                     
					 <select name="course" id="course" class="form-control" onchange="fetch_section();">
                    <option value="">Select Class</option>
					@if($course!="")
						 @foreach($course as $cours)
								<option value="{{$cours->course_id}}">{{$cours->name}}</option>
								
						@endforeach
					 @endif
					 </select>
					 
					
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section<span>*<span></label>
                  <div class="col-sm-9">
                    
                   <select name="batch" id="batch" class="form-control" onchange="select_time_table()" >
                    <option value="">Select Section</option>
					
					 </select>
				  </div>
                </div> 
				 
				
				<div id="t_display">
					
				</div> 
				

            </div>	
              <!-- /.box-body -->
              
              
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
	function confirmDel(){
		var x=confirm("Are you Sure You Want Delete.")
		if(x){
			return true;
		}else{
			return false;
		}
	}
</script>  
    <script>
	function select_time_table(){
	var academic=document.getElementById("academic").value;
	var course=document.getElementById("course").value;
	var batch=document.getElementById("batch").value;
	//alert(batch);
	if(course!="" && academic!="" && batch!=""){
		var str=course+"---"+batch+"---"+academic;
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) 
		{
			if((this.responseText)== "Not Found")
			{
				alert("Sorry class time table not faound...");
			}else{
				//alert(this.responseText);
			  document.getElementById("t_display").innerHTML=this.responseText;
			  //document.getElementById("btn").style.display="block";
			}  
		}
	  }
	  xmlhttp.open("GET","select_time_table/"+str,true);
	  xmlhttp.send();
	}
}
	
	
	
	
	
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
	  xmlhttp.open("GET","select_section_for_allocation/"+course,true);
	  xmlhttp.send();
	}
}

function select_subject(){
	var academic=document.getElementById("academic").value;
	var course=document.getElementById("course").value;
	var batch=document.getElementById("batch").value;
	if(course!="" && academic!="" && batch!=""){
		var str=course+"---"+batch+"---"+academic;
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) 
		{
			if((this.responseText)== "Not Found")
			{
				alert("Please check subject allocation");
			}else{
				//alert(this.responseText);
			  document.getElementById("subject").innerHTML=this.responseText;
			  //document.getElementById("btn").style.display="block";
			}  
		}
	  }
	  xmlhttp.open("GET","select_subject/"+str,true);
	  xmlhttp.send();
	}
}

function select_teacher(){
	var academic=document.getElementById("academic").value;
	var course=document.getElementById("course").value;
	var batch=document.getElementById("batch").value;
	if(course!="" && academic!="" && batch!=""){
		var str=course+"---"+batch+"---"+academic;
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) 
		{
			if((this.responseText)== "Not Found")
			{
				alert("Please check subject allocation");
			}else{
				//alert(this.responseText);
			  document.getElementById("teacher").innerHTML=this.responseText;
			  //document.getElementById("btn").style.display="block";
			}  
		}
	  }
	  xmlhttp.open("GET","select_teacher/"+str,true);
	  xmlhttp.send();
	}
}

</script>
@endsection