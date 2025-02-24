<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:35:54 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>WorkForce</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="{!! asset('admintheme/dist/bootstrap/css/bootstrap.min.css') !!}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{!! asset('admintheme/dist/img/favicon-16x16.png') !!}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{!! asset('admintheme/dist/css/style.css') !!}">
<link rel="stylesheet" href="{!! asset('admintheme/dist/css/font-awesome/css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('admintheme/dist/css/et-line-font/et-line-font.css') !!}">
<link rel="stylesheet" href="{!! asset('admintheme/dist/css/themify-icons/themify-icons.css') !!}">
<link rel="stylesheet" href="{!! asset('admintheme/dist/css/simple-lineicon/simple-line-icons.css') !!}">

<!-- DataTables -->
<link rel="stylesheet" href="{!! asset('admintheme/dist/plugins/datatables/css/dataTables.bootstrap.min.css') !!}">

<!-- hmenu -->
<link rel="stylesheet" href="{!! asset('admintheme/dist/plugins/hmenu/ace-responsive-menu.css') !!}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="index.html" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="{!! asset('admintheme/dist/img/logo-n.png') !!}" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="{!! asset('admintheme/dist/img/logo.png') !!}" alt=""></span> </a> 
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <div class="pull-left search-box">
      
        <!-- search form --> </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{!! asset('admintheme/dist/img/img1.jpg') !!}" class="user-image" alt="User Image"> <span class="hidden-xs">Admin</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{!! asset('admintheme/dist/img/img1.jpg') !!}" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left">Admin <small>admin@gmail.com</small> </p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
           
              <li role="separator" class="divider"></li>
              <li><a href="/changepassword"><i class="icon-gears"></i> Change Password </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Main Nav -->
  <div class="main-nav">
    <nav> 
      <!-- Menu Toggle btn-->
      <div class="menu-toggle">
        <h3>Menu</h3>
        <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!-- Responsive Menu Structure--> 
      <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
      <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          <ul>
            <li><a href="/admindashboard" class="active">Admin Dash board</a></li>
          >
          </ul>
        </li>
       
        <li><a href="#"><i class="fa fa-edit"></i> <span>Department</span></a>
          <ul>
            <li><a href="/department/create">Create Department</a></li>
            <li><a href="/department">View Department</a></li>
          
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-edit"></i> <span>Employee</span></a>
          <ul>
            <li><a href="/employee/create">Create Employee</a></li>
            <li><a href="/employee">View Employee</a></li>
          
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-edit"></i> <span>Customer</span></a>
          <ul>
            <li><a href="/customer/create">Create Customer</a></li>
            <li><a href="/customer">View Customer</a></li>
          
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-edit"></i> <span>Employee Group</span></a>
          <ul>
            <li><a href="/empgroup/create">Create Group</a></li>
            <li><a href="/empgroup">View Group</a></li>
          
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-edit"></i> <span>Project</span></a>
          <ul>
            <li><a href="/project/create">Create Project</a></li>
            <li><a href="/project">View Project</a></li>
          
          </ul>
        </li>
        
      
      </ul>
    </nav>
  </div>
  <!-- Main Nav -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
     
    </div>
    
    <!-- Main content -->
    <div class="content">
@yield('content')

    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2025 Microtel Netlinks Pvt. Ltd. All rights reserved.</footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="{!! asset('admintheme/dist/js/jquery.min.js') !!}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{!! asset('admintheme/dist/bootstrap/js/bootstrap.min.js') !!}"></script> 

<!-- template --> 
<script src="{!! asset('admintheme/dist/js/adminkit.js') !!}"></script> 


<!-- DataTable --> 
<script src="{!! asset('admintheme/dist/plugins/datatables/jquery.dataTables.min.js') !!}"></script> 
<script src="{!! asset('admintheme/dist/plugins/datatables/dataTables.bootstrap.min.js') !!}"></script> 
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


<!-- Morris JavaScript --> 
<script src="{!! asset('admintheme/dist/plugins/raphael/raphael-min.js') !!}"></script> 
<script src="{!! asset('admintheme/dist/plugins/morris/morris.js') !!}"></script> 
<script src="{!! asset('admintheme/dist/plugins/functions/dashboard1.js') !!}"></script> 

<!-- Chart Peity JavaScript --> 
<script src="{!! asset('admintheme/dist/plugins/peity/jquery.peity.min.js') !!}"></script> 
<script src="{!! asset('admintheme/dist/plugins/functions/jquery.peity.init.js') !!}"></script>
<script src="{!! asset('admintheme/dist/plugins/hmenu/ace-responsive-menu.js') !!}"></script> 
<!--Plugin Initialization--> 
<script >
         $(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '768', // Set the same in Media query       
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
         });
</script>
</body>


</html>

    