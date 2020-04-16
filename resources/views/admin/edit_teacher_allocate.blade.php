@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Class Teacher Allocate 
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Academic</a></li>
		<li><a href="#">Class Teacher Allocate </a></li>
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
			<form class="form-horizontal" method="post" action="update" >					 
                         
           @if($data != "")	
																
							@foreach ($data as $dat)
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class Name <span>*<span></label>
                  <div class="col-sm-9">
                    <select name="course" id="course" class="form-control" onchange="fetch_section();" required>
					 
					 <option value="">Select class</option>
					 @if($course != "")	
																
							@foreach($course as $cours)
							   
								<option value="{{$cours->course_id}}" @if($cours->course_id==$dat->course_id) selected @endif>{{$cours->name}}</option>
								
								
									
								@endforeach
								@endif
					 </select>
					 
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section Name <span>*<span></label>
                  <div class="col-sm-9">
                      
					 <select name="batch" id="batch" class="form-control" required>
					 <option value="">Select section</option>
					  @if($batch != "")	
																
							@foreach($batch as $batc)
							    @if($batc->batch_id == $dat->batch_id)
								<option value="{{$batc->batch_id}}" @if($batc->batch_id==$dat->batch_id) selected @endif>{{$batc->batch_name}}</option>
								@endif
							@endforeach
					  @endif
					 </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Teacher Name <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="emp" class="form-control" required >
					 
					 <option value="">Select Teacher</option>
					 	@if($emp != "")	
																
							@foreach ($emp as $em)
							   
								<option value="{{$em->emp_id}}" @if($em->emp_id==$dat->teacher_id) selected @endif>{{$em->emp_fname}} {{$em->emp_mid_name}} {{$em->emp_lname}}</option>
								
								
									
								@endforeach
								@endif
					 </select>
                  </div>
                </div>
                
				   <input type="hidden" name="token" value="{{ $dat->allocation_id }}" />
				                                       
	
								@endforeach
								@endif
            </div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">update</button>
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
	  xmlhttp.open("GET","select_section_edit_teacher/"+course,true);
	  xmlhttp.send();
	}
}
</script>
@endsection