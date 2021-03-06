@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Class
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Academic</a></li>
		<li><a href="#">Class </a></li>
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
			@if($bdata!="")
			@foreach($bdata as $course)
			<form class="form-horizontal" method="post" action="update" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="cname" class="form-control" type="text" placeholder="Enter class name" value="{{$course->name}}" required>
					 
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class Code <span>*<span></label>
                  <div class="col-sm-9">
                      <input name="ccode" class="form-control" type="text" placeholder="Enter class code" value="{{$course->code}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class Description <span>*<span></label>
                  <div class="col-sm-9">
                     <textarea name="desc" class="form-control" placeholder="Enter class Description" required>{{$course->description}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">No. of Lecture per day<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="lecture_per_day" class="form-control" type="number" placeholder="Enter No. of Lecture per day " value="{{$course->lecture_per_day}}" required>
                  </div>
                </div> 
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Minimum Attendance(%)<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="cattendence" class="form-control" type="number" placeholder="Enter class minimum attendance " value="{{$course->minimun_attendence}}" required>
                  </div>
                </div> 
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Attendance Type<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="cattendencetype" class="form-control" type="text" placeholder="Enter class attendance type" value="{{$course->attendence_type}}" required>
                  </div>
                </div>  
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Number of Working Days<span>*<span></label>
                  <div class="col-sm-9">
                     <input name="cwdays" class="form-control" type="number" placeholder="Enter class Working days" value="{{$course->working_days}}" required>
                  </div>
                </div>                                       
				<input type="hidden" name="token" value="{{ $course->course_id }}" />
            </div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Update</button>
              </div>
              <!-- /.box-footer -->
			  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
			@endforeach
			@endif
          </div></div>
			<div class="col-md-3"></div>
		</div>  
    </section>
    <!-- /.content -->
  </div>  
@endsection