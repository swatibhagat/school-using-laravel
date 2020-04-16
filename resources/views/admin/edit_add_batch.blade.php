@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Section
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Academic</a></li>
		<li><a href="#">Section </a></li>
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
				@if($bdata !="")
					@foreach($bdata as $batch)			
			<form class="form-horizontal" method="post" action="update" >					 
                         
           
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Class Name <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="cname" class="form-control" required>
                         @if($data !="")
							 
						 @foreach($data as $course)
                          <option value="{{ $course->course_id }}" @if($course->course_id == $batch->course_id)selected @endif >{{$course->name}}</option> 
                        @endforeach
						@endif
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Section Name <span>*<span></label>
                  <div class="col-sm-9">
                      <!--input name="bname" class="form-control" type="text" placeholder="Enter section name" value="{{$batch->batch_name}}"-->
						<select name="bname" class="form-control" required>
							<option value="">Select Section Name</option>
							<option value="A" @if($batch->batch_name=="A") Selected @endif >A</option>
							<option value="B" @if($batch->batch_name=="B") Selected @endif>B</option>
							<option value="C" @if($batch->batch_name=="C") Selected @endif>C</option>
							<option value="D" @if($batch->batch_name=="D") Selected @endif>D</option>
							<option value="E" @if($batch->batch_name=="E") Selected @endif>E</option>
							<option value="F" @if($batch->batch_name=="F") Selected @endif>F</option>
					    </select>
				  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Maximum Student<span>*<span></label>
                  <div class="col-sm-9">
                      <input name="bmstudent" class="form-control" type="text" placeholder="Enter section maximum student" value="{{$batch->max_student}}" required>
                  </div>
                </div>                                       
					
            </div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">  
				<input type="hidden" name="token" value="{{ $batch->batch_id}}" />
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