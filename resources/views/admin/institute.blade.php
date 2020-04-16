@extends('admin/app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Institute Details
        <small>Update Now</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Settings</a></li>
		<li><a href="#">Institute Details</a></li>        
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
			<form class="form-horizontal" method="post" action="institute/save" enctype="multipart/form-data">			 
   
			 <div class="box box-primary box-body -border-bottom -margin-top-twentyfive">                 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Name <span>*<span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" required placeholder="Full Name" value="<?php echo $institute->name;?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Full Address</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fulladdress" name="fulladdress" required placeholder="Full Address" value="<?php echo $institute->address;?>">
                  </div>
                </div>      

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Phone<span>*<span></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="phone" name="phone" required  placeholder="Phone Number" value="<?php echo $institute->phone;?>">
                  </div>
                </div>    

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Mobile<span>*<span></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="mobile" name="mobile" required  placeholder="Mobile Number" value="<?php echo $institute->mobile;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Email <span>*<span></label>
                  <div class="col-sm-9">
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $institute->email;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Fax</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" value="<?php echo $institute->fax;?>">
                  </div>
                </div> 

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Institute Code<span>*<span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required id="code" name="code" placeholder="Institute Code" value="<?php echo $institute->institution_code;?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Country<span>*<span></label>
                  <div class="col-sm-9">
                  		<select name="country" class="form-control">
                  			<option value="India">India</option>
                  		</select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Currency<span>*<span></label>
                  <div class="col-sm-9">
                  		<select name="currency" class="form-control">
                  			<option value="INR">INR</option>
                  		</select>
                  </div>
                </div>  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Contact Person<span>*<span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required id="person" name="person" placeholder="Contact Person" value="<?php echo $institute->admin_contact_person;?>">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">About Us<span>*<span></label>
                  <div class="col-sm-9">
                    <textarea name="about" placeholder="About Us" class="form-control" required><?php echo $institute->about;?></textarea>
					
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Logo</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="logo" name="logo" >
                  </div>
                  <div class="col-sm-3">
                  	<?php 
                  		if(isset($institute->logo)) {
                  			$logo = $institute->logo;	
                  		} else {
							$logo = "boxed-bg.jpg";
                  		}
                  	?>
                    <img src="{{ asset("/resources/assets/admin-lte/dist/img") }}/<?php echo $logo;?>" style="height: 100px;">
                  </div>                  
                </div>                                                
				                  
              </div>					  
              <!-- /.box-body -->
              <div class="box-footer -margin-top-twentyfive">                 
                <button type="submit" class="btn btn-info pull-right -background-color">Save</button>
              </div>
              <!-- /.box-footer -->
			  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
			  <input type="hidden" name="ins_id" value="<?php echo $institute->ins_id;?>" />
            </form>
          </div></div>
			<div class="col-md-3"></div>
		</div>   
    </section>
    <!-- /.content -->
  </div>  
@endsection