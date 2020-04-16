@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	 Employee Bank Detail
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee</a></li>
		<li><a href="#"> Employee Bank Detail</a></li>
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
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Designation <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_desi" class="form-control" type="text" placeholder="Enter Employee Designation" required-->
					 
					 <select name="emp_desi" class="form-control" id="designation" onchange="employee_code(this.value);" required>
					 <option value="">Select Employee Designation</option>
					 @if($data!="")
						 @foreach($data as $desi)
						<option value="{{$desi->desi_id}}">{{$desi->desi_name}}</option>
						@endforeach
					 @endif
					 </select>
						
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Code <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_code" class="form-control" type="text" placeholder="Enter Employee Code" required-->
					 <select name="emp_code" class="form-control" id="emp_code" onchange="employee_name(this.value);" required >
						<option value="">Select Employee Code</option>
					 </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Employee Name <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="emp_name" class="form-control" id="emp_name" required>
						<option value="">Select Employee Name</option>
					 </select>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Bank Name <span>*<span></label>
                  <div class="col-sm-9">
                     <!--input name="emp_bank_name" class="form-control" type="text" placeholder="Enter Bank Name" required-->
					 <select name="emp_bank_name" class="form-control" required> 
						<option value="">Select Bank Name</option>
						@if($bank != "")
							@foreach($bank as $bnk)
								<option value="{{$bnk->bank_name}}">{{$bnk->bank_name}}</option>
							@endforeach
						@endif
					 </select>
				  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Branch <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_bank_branch" class="form-control" type="text" placeholder="Enter Branch" required>
					 
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Bank Address <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_bank_add" class="form-control" type="text" placeholder="Enter Bank Address" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Bank Phone<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_bank_phone" class="form-control" type="text"  placeholder="Enter Bank Phone" required>
					 
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">IFSC Code <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_bank_ifsc" class="form-control" type="text" placeholder="Enter IFSC Code" required>
				  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Account No. <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="emp_acc" class="form-control" type="text" placeholder="Enter Account No. " required>
					 
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">DD Payable Address <span><span></label>
                  <div class="col-sm-9">
                     <input name="emp_dd" class="form-control" type="text" placeholder="Enter DD Payable Address">
					 
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
  function employee_code(designation){
	 
	  if(designation!=""){
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			 //alert(this.responseText);
			  document.getElementById("emp_code").innerHTML=this.responseText;
			  //document.getElementById("btn").style.display="block";
			}
		  }
		  xmlhttp.open("GET","get_employee_code/"+designation,true);
		  xmlhttp.send();
	  }
		
  }
  function employee_name(name){
	   if(name!=""){
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			// alert(this.responseText);
			  document.getElementById("emp_name").innerHTML=this.responseText;
			  //document.getElementById("btn").style.display="block";
			}
		  }
		  xmlhttp.open("GET","get_employee_name/"+name,true);
		  xmlhttp.send();
	  }
  }
  </script>
@endsection