@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Assign Subject
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Subjects</a></li>
		<li><a href="#">Assign Subject</a></li>
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
			<form class="form-horizontal" method="post" action="create" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">     
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Academic Year <span>*<span></label>
                  <div class="col-sm-9">
				  <select name="academic" id="academic" class="form-control" >
                    <option value="">Select Academic Year </option>
					@if($academic!="")
						 @foreach($academic as $ac)
								<option value="{{$ac->academic_id}}">{{$ac->start_year}}</option>
								
						@endforeach
					 @endif
					 </select>
                  </div>
                </div>
				  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class <span>*<span></label>
                  <div class="col-sm-9">
                     
					 <select name="course" id="course" class="form-control" onchange="fetch_section();" required>
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
                     <select name="batch" id="batch" class="form-control" required>
						<option value="">Select Section</option>
						
					 </select>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="subject" class="form-control" required>
						<option value="">Select Subject</option>
						@if($subject!="")
							@foreach($subject as $subjec)
						<option value="{{$subjec->id}}">{{$subjec->sub_name}}</option>
							@endforeach
						@endif
					 </select>
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
	//var block=document.getElementById("batch_block").style.display="block";
	var batch=document.getElementById("batch").value;
	//var att_date=document.getElementById("a_date").value;
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


</script>
@endsection