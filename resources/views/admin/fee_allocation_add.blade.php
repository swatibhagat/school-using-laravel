@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	      Fee Allocation
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Fees</a></li>
		
		<li><a href="#">Fee Allocation</a></li>        
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
                  <label for="inputPassword3" class="col-sm-3 control-label">Fee Category <span>*<span></label>
                  <div class="col-sm-9">
                     
					 <select name="fee_cat" class="form-control" required>
						<option value="">Select Fee Category</option>
						@if($cate!="")
							@foreach($cate as $cat)
							<option value="{{$cat->fee_cat_id}}">{{$cat->fee_cat}}</option>
							@endforeach
						@endif
					 </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fee Sub Category <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="fee_sub_cat" class="form-control" required>
						<option value="">Select Fee Sub Category</option>
						@if($sub_cat!="")
							@foreach($sub_cat as $sub_ca)
							<option value="{{$sub_ca->fee_sub_cat_id}}">{{$sub_ca->fee_sub_cat}}</option>
							@endforeach
						@endif
					 </select>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fee For <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="fee_for" class="form-control" type="text" placeholder="Enter Fee For" required-->
					 <select name="fee_for" class="form-control" required>
						<option value="">Select Fee For</option>
						<option value="All Batches">All Batches</option>
						<option value="Selected Batches">Selected Batches</option>
						<option value="Student In Batch">Student In Batch</option>
						<option value="Category Wise">Category Wise</option>
						
					 </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="course" id="course" class="form-control" onchange="fetch_batch();" required>
						<option value="">Select Class </option>
						@if($course!="")
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
						<option value="">Select Section </option>
						@if($batch!="")
							@foreach($batch as $batc)
							<option value="{{$batc->batch_id}}">{{$batc->batch_name}}</option>
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
  function fetch_batch(){
	
	
	var course=document.getElementById("course").value;
	
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
			//alert(this.responseText);
		  document.getElementById("batch").innerHTML=this.responseText;
		  //document.getElementById("btn").style.display="block";
		}
	  }
	  xmlhttp.open("GET","select_batch_for_allocation/"+course,true);
	  xmlhttp.send();
	}
}
  </script>
@endsection