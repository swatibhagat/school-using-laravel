<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zurich School Industries | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/resources/assets/admin-lte/dist/img/favicon-16x16.png") }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/bootstrap/css/bootstrap.min.css") }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/dist/css/AdminLTE.css") }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/dist/css/skins/_all-skins.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/plugins/iCheck/flat/blue.css") }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/plugins/morris/morris.css") }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/plugins/datepicker/datepicker3.css") }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/plugins/daterangepicker/daterangepicker.css") }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset("/resources/assets/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
<!-- jQuery 2.2.3 -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Header -->
    @include('admin.header')
	
    <!-- Sidebar -->
    @include('admin.sidebar')

	@yield('content')
 
 <!-- Footer -->
 @include('admin.footer')

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("/resources/assets/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>

<!-- Sparkline -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
<!-- jvectormap -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("/resources/assets/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/knob/jquery.knob.js") }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset("/resources/assets/admin-lte/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- datepicker -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>
<!-- Slimscroll -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset("/resources/assets/admin-lte/plugins/fastclick/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/resources/assets/admin-lte/dist/js/app.min.js") }}"></script>



</body>
</html>
