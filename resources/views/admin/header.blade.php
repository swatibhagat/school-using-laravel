  <header class="main-header">
    <!-- Logo -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href="{{url("/admin")}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ZI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Zurich Industries</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset("/resources/assets/admin-lte/dist/img/small-logo.png") }}" class="user-image" alt="User Image">
              <span class="hidden-xs">Zurich Industries</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset("/resources/assets/admin-lte/dist/img/avatar5.png") }}" class="img-circle" alt="User Image">
                <p>
                  Zurich Industries
                  <small>Start since March. 2018</small>
                </p>
              </li>   
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{url("admin/logout")}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>