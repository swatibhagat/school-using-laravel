  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/resources/assets/admin-lte/dist/img/avatar5.png") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Zurich Industries</p>          
        </div>
      </div> 
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">&nbsp;</li>
        <li class="treeview " >
          <a href="{{url("admin")}}">
            <i class="fa fa-dashboard" ></i> <span>Dashboard</span> 
          </a> 
        </li> 
        <li>
          <a href="#">
            <i class="ion ion-android-settings"></i> <span>Settings</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>			
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("institute")}}"><i class="fa fa-circle-o"></i>Institution Details</a></li>
            <li><a href="{{url("academic")}}"><i class="fa fa-circle-o"></i>Academic Details</a></li>
          </ul>		  
        </li> 
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Academic</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("course")}}"><i class="fa fa-circle-o"></i>Class</a></li>
            <li><a href="{{url("batch")}}"><i class="fa fa-circle-o"></i>Section</a></li>
            <li><a href="{{url("teacher_allocate")}}"><i class="fa fa-circle-o"></i>Class Teacher Allocation</a></li>
          </ul>     
        </li> 
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Subjects</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('subject')}}"><i class="fa fa-circle-o"></i>Subject</a></li>
            <li><a href="{{url('assign_subject')}}"><i class="fa fa-circle-o"></i>Assign Subject</a></li>
            <li><a href="{{url('subject_allocation')}}"><i class="fa fa-circle-o"></i>Subject Allocation</a></li>
          </ul>     
        </li> 
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Students</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("student_category")}}"><i class="fa fa-circle-o"></i>Student Category</a></li>
            <li><a href="{{url("student_registration/add")}}"><i class="fa fa-circle-o"></i>Student Admission</a></li>
            <li><a href="{{url("student_registration")}}"><i class="fa fa-circle-o"></i>Student List</a></li>
            <li><a href="{{url("student_attendance")}}"><i class="fa fa-circle-o"></i>Attendance</a></li>
            <li><a href="{{url("parent_registration")}}"><i class="fa fa-circle-o"></i>Parent List</a></li>
            <li><a href="{{url("roll_number_allote")}}"><i class="fa fa-circle-o"></i>Roll Number</a></li>            
          </ul>     
        </li>  
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Employee</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("employee_type")}}"><i class="fa fa-circle-o"></i> Employee Type</a></li>
            <li><a href="{{url("employee_dept")}}"><i class="fa fa-circle-o"></i> Department</a></li>
            <li><a href="{{url("employee_designation")}}"><i class="fa fa-circle-o"></i> Designation</a></li>
            <li><a href="{{url("employee_detail/add")}}"><i class="fa fa-circle-o"></i>Employee Registration</a></li>
            <li><a href="{{url("employee_detail")}}"><i class="fa fa-circle-o"></i>Employee List</a></li>
            <li><a href="{{url("bank")}}"><i class="fa fa-circle-o"></i>Add Bank </a></li>
            <li><a href="{{url("emplyoyee_bank")}}"><i class="fa fa-circle-o"></i>Employee Bank Details</a></li>
            <!--li><a href="{{url("emplyoyee_daily_attendance")}}"><i class="fa fa-circle-o"></i>Daily Attendence</a></li>         
            <li><a href="{{url("view_employee_attendance")}}"><i class="fa fa-circle-o"></i>View Attendence</a></li-->         
          </ul>     
        </li> 
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Fees</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("fee_category")}}"><i class="fa fa-circle-o"></i>Fee Category</a></li>
            <li><a href="{{url("fee_sub_category")}}"><i class="fa fa-circle-o"></i>Fee Sub Category</a></li>
            <li><a href="{{url("fee_allocation")}}"><i class="fa fa-circle-o"></i>Fee Allocation</a></li>
            <li><a href="{{url("fee_collection")}}"><i class="fa fa-circle-o"></i>Fee Collection</a></li>
            <!--li><a href="#"><i class="fa fa-circle-o"></i>Quick Payment</a></li-->            
          </ul>     
        </li> 
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Transport</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("vehicle")}}"><i class="fa fa-circle-o"></i>Vehicle</a></li>
            <li><a href="{{url("driver")}}"><i class="fa fa-circle-o"></i>Driver</a></li>
            <li><a href="{{url("route")}}"><i class="fa fa-circle-o"></i>Route</a></li>
            <li><a href="{{url("destination_fee")}}"><i class="fa fa-circle-o"></i>Add Destination & Fees</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Transport Allocation</a></li>
          </ul>     
        </li>
		<li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Time Tables</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url("create_time_table")}}"><i class="fa fa-circle-o"></i>Add Time Table</a></li>
            <li><a href="{{url("view_time_table")}}"><i class="fa fa-circle-o"></i>View Time Table</a></li>
            
          </ul>     
        </li>
       
		<li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Events</span>               
          </a>      
        </li>
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Interigation</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Vehicle Details </a></li>
          </ul>     
        </li>
        <li>
          <a href="#">
            <i class="ion ion-stats-bars"></i> <span>Reports</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>     
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Vehicle Details </a></li>
          </ul>     
        </li>                                                                                  
		<!---
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>