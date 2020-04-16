@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Subject
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Subjects</a></li>
		<li><a href="#">Course Details</a></li>
		<li><a href="#">Subject</a></li>        
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
               @if($data!="")          
					@foreach($data as $subject)
			   <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Code <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="sub_code" class="form-control" type="text" placeholder="Enter Subject Code" value="{{$subject->sub_code}}" required>
					 
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Name <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="sub_name" class="form-control" type="text" placeholder="Enter Subject Name" value="{{$subject->sub_name}}" required>
					 
                  </div>
                </div>
					 <input type="hidden" name="token" value="{{ $subject->id }}" />
					@endforeach
				@endif
			<div>	
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Update</button>
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