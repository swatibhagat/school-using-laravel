@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Section
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Academic</a></li>
		<li><a href="#">Section</a></li>
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
                  <label for="inputPassword3" class="col-sm-3 control-label">Class Name <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="cname" class="form-control"required>
                        <option value="">Select Class</option> 
						@if($data !="")
							 
						 @foreach($data as $course)
                          <option value="{{ $course->course_id }}">{{$course->name}}</option> 
                        @endforeach
						@endif
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section Name <span>*<span></label>
                  <div class="col-sm-9">
                      <!--input name="bname" class="form-control" type="text" placeholder="Enter section name"-->
					  <select name="bname" class="form-control" required>
							<option value="">Select Section Name</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
							
							
					  </select>
                  </div>
                </div>
                <!--div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Start Date <span>*<span></label>
                  <div class="col-sm-9">
                      <input name="bsdate" class="form-control" type="date" placeholder="Enter section start data">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">End date<span>*<span></label>
                  <div class="col-sm-9">
                      <input name="bedate" class="form-control" type="date" placeholder="Enter section end date">
                  </div>
                </div--> 
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Maximum Student<span>*<span></label>
                  <div class="col-sm-9">
                      <input name="bmstudent" class="form-control" type="text" placeholder="Enter section maximum student" required>
                  </div>
                </div>                                       

            </div>	
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
  
@endsection