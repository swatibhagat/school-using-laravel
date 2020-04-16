@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Fees Collection
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Fees</a></li>
		<li><a href="#">Fees Collection</a></li>        
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
                         
				<meta name="csrf-token" content="{{ csrf_token() }}" />
				
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
                     
					 <select name="dept" class="form-control" id="course" onchange="fetch_batch();">
						<option value="">Select Class</option>
						@if($course!="")
							@foreach($course as $dep)
						<option value="{{$dep->course_id}}">{{$dep->name}}</option>
							@endforeach
						@endif
					 </select>
                  </div>
                </div>

			  <div class="form-group" id="batch_block" style="display:none">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="dept" class="form-control" id="batch" onchange="fetch_student();">
						<option value="">Select Section</option>
						
					 </select>
                  </div>
                </div> 
				
				<div class="form-group" id="student_block" style="display:none">
                  <label for="inputPassword3" class="col-sm-3 control-label">Student <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="dept" class="form-control" id="student" onchange="fetch_fee_sub_category();">
						<option value="">Select Student</option>
						
					 </select>
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
			  <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
            </form>
			
          </div></div>
			<div class="col-md-3"></div>
		</div>  
    </section>
    <!-- /.content -->
  </div>  
@endsection
<script>
function fetch_batch(){
	
	
	var course=document.getElementById("course").value;
	var a_date=document.getElementById("batch_block").style.display="block";
	//var batch=document.getElementById("batch").value;
	if((course!="")){
		
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("batch").innerHTML=this.responseText;
		  //document.getElementById("btn").style.display="block";
		}
	  }
	  xmlhttp.open("GET","select_batch/"+course,true);
	  xmlhttp.send();
	}
}
function fetch_student(){
	var academic=document.getElementById("academic").value;
	var course=document.getElementById("course").value;
	var batch=document.getElementById("batch").value;
	var a_date=document.getElementById("student_block").style.display="block";
	//var batch=document.getElementById("batch").value;
	if((course!="")&&(batch!="")){
		var str=course+"---"+batch+"---"+academic;
		
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("student").innerHTML=this.responseText;
		  //document.getElementById("btn").style.display="block";
		}
	  }
	  xmlhttp.open("GET","select_student/"+str,true);
	  xmlhttp.send();
	}
}
function fetch_fee_sub_category(){
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
	  xmlhttp.open("GET","fetch_fee_sub_category",true);
	  xmlhttp.send();
}

function fee_submit(i,amount,sub_cat,cat){
	var fin=document.getElementById("fine"+i).value;
	var dis=document.getElementById("discount"+i).value;
	var type_fee=document.getElementById("fee_type"+i).value;
	var academic=document.getElementById("academic").value;
	var course=document.getElementById("course").value;
	var batch=document.getElementById("batch").value;
	var student=document.getElementById("student").value;
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	/*if(fin==""){
		var data=amount+"---"+sub_cat+"---"+cat+"---"+type_fee+"---"+academic+"---"+course+"---"+batch+"---"+student+"---"+dis;
	}else if(dis==""){
		var data=amount+"---"+sub_cat+"---"+cat+"---"+type_fee+"---"+academic+"---"+course+"---"+batch+"---"+student+"---"+fin;
	}else if(fin=="" && dis==""){
		var data=amount+"---"+sub_cat+"---"+cat+"---"+type_fee+"---"+academic+"---"+course+"---"+batch+"---"+student;
	}else{
		var data=amount+"---"+sub_cat+"---"+cat+"---"+type_fee+"---"+academic+"---"+course+"---"+batch+"---"+student+"---"+fin+"---"+dis;
	}*/
	
	$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: 'submit_fee',
		type: 'POST',
		dataType: 'json',
		data: {_token: CSRF_TOKEN,cat:cat, sub_cat:sub_cat, amount:amount, academic:academic,
		course:course, batch:batch, student:student, dis:dis,fin:fin},
		dataType: 'JSON',
		success: function (data) {
			alert($data);
			//console.log(data);
		}
	});
 
 /*var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     // document.getElementById("demo").innerHTML = this.responseText;
	 alert(this.responseText);
    }
  };
  xhttp.open("POST", "submit_fee", true);
  xhttp.setRequestHeader("Content-type", "JSON");
  xhttp.send("data=data & _token: CSRF_TOKEN");

*/

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