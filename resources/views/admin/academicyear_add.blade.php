@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	Academic Details
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
		<li><a href="#">Academic Details</a></li>
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
                  <label for="inputPassword3" class="col-sm-3 control-label">Start Year <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="startyear" class="form-control">
                         @for ($i = 2000; $i < 2050; $i++)
                          <option value="{{ $i }}">{{ $i }}</option> 
                        @endfor
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Start Month <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="startmonth" class="form-control">
                         <option value="0">Please Select Month</option> 
                         <option value="1">January</option> 
                          <option value="2">February</option> 
                          <option value="3">March</option> 
                          <option value="4">April</option> 
                          <option value="5">May</option> 
                          <option value="6">June</option> 
                          <option value="7">July</option> 
                          <option value="8">August</option> 
                          <option value="9">September</option> 
                          <option value="10">October</option> 
                          <option value="11">November</option> 
                          <option value="12">December</option> 
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">End Year <span>*<span></label>
                  <div class="col-sm-9">
                     <select name="endyear" class="form-control">
                         @for ($i = 2000; $i < 2050; $i++)
                          <option value="{{ $i }}">{{ $i }}</option> 
                        @endfor
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">End Month<span>*<span></label>
                  <div class="col-sm-9">
                     <select name="endmonth" class="form-control">
                         <option value="0">Please Select Month</option> 
                         <option value="1">January</option> 
                          <option value="2">February</option> 
                          <option value="3">March</option> 
                          <option value="4">April</option> 
                          <option value="5">May</option> 
                          <option value="6">June</option> 
                          <option value="7">July</option> 
                          <option value="8">August</option> 
                          <option value="9">September</option> 
                          <option value="10">October</option> 
                          <option value="11">November</option> 
                          <option value="12">December</option> 
                     </select>
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