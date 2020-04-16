@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        	      Fee Category
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Fees</a></li>
		
		<li><a href="#">Fee Category</a></li>        
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
					@foreach($data as $dat)
			      <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fee Category <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="fee_cat" class="form-control" type="text" placeholder="Enter Fee Category" value="{{$dat->fee_cat}}" required>
					 
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Receipt No. Prefix <span>*<span></label>
                  <div class="col-sm-9">
                     <input name="fee_receipt" class="form-control" type="text" placeholder="Enter Receipt No. Prefix" value="{{$dat->fee_receipt}}" required>
					 
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Description <span>*<span></label>
                  <div class="col-sm-9">
                     <textarea name="desc" class="form-control" type="text" placeholder="Enter Description" required>{{$dat->desc}}</textarea>
					 
                  </div>
                </div>
				<input type="hidden" name="token" value="{{ $dat->fee_cat_id }}" />
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