@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	View Attendance
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee</a></li>
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
			
			<form class="form-horizontal" method="post" action="update" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date <span>*<span></label>
                  <div class="col-sm-9">
                      <input name="a_date" class="form-control" id="a_date" type="date" placeholder="Enter attendabce date"  required>
                  </div>
                </div>

			   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Department <span>*<span></label>
                  <div class="col-sm-9">
                     
					 <select name="dept" class="form-control" id="dept" onchange="showUser(this.value)">
						<option value="">Select Department</option>
						@if($dept!="")
							@foreach($dept as $dep)
						<option value="{{$dep->dept_id}}">{{$dep->dept_name}}</option>
							@endforeach
						@endif
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
function showUser(str) {
	var a_date=document.getElementById("a_date").value;
  if (str === "" && a_date ==="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } else if (str != "" && a_date !=""){
	  var id=a_date+"---"+str;
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("txtHint").innerHTML=this.responseText;
		 // document.getElementById("btn").style.display="block";
		}
	  }
	  xmlhttp.open("GET","view_daily_attendance/select/"+id,true);
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