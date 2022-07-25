@include('admin.layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
   <!-- Preloader -->
   <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('public/admin/dist/img/AdminLTELogo.png') }}" alt="Wait.." height="60" width="60">
   </div>
   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
         <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('admin/dashboard') }}" class="nav-link">Dashboard</a>
         </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
               <form class="form-inline">
                  <div class="input-group input-group-sm">
                     <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                     <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </li> -->
         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
            @if (Route::has('login'))
               <div class="hidden login-reg-blk d-flex align-items-center">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                        <a class="dropdown-item" href="{{url('admin/admin-profile')}}">
                          {{ __('Account') }}
                        </a>
                        <a class="dropdown-item" href="{{url('admin/change-password')}}">
                          {{ __('Change Password') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
               </div>
            @endif
         </li>
         <!-- Notifications Dropdown Menu -->
      </ul>
   </nav>
   <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('admin/dashboard') }}" class="brand-link">
      <img src="{{ asset('public/admin/dist/img/AdminLTELogo.png') }} " alt="lusha Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold">Lusha Admin</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
         <!-- Sidebar Menu -->
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
               <li class="nav-item {{ request()->is('admin/dashboard') ? 'menu-open active' : '' }}">
                  <a href="{{ url('admin/dashboard') }}" class="nav-link">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                        Dashboard
                     </p>
                  </a>
               </li>
                <li class="nav-item {{ request()->is('admin/member-add-service') || request()->is('admin/member-all-service') || request()->is('admin/manage-member-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-envelope nav-icon" aria-hidden="true"></i>
                     <p>
                        Inbox
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/contactSale/all-contact-sale')}}" class="nav-link {{ request()->is('admin/contactSale/all-contact-sale') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All inbox</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item {{ request()->is('admin/add-member') || request()->is('admin/search-member') || request()->is('admin/import-member') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-yelp nav-icon" aria-hidden="true"></i>
                     <p>
                        Prospecting
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/prospecting/all-prospecting')}}" class="nav-link {{ request()->is('admin/add-member') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Prospecting</p>
                        </a>
                     </li>
                  </ul>
               </li> 
                <li class="nav-item {{ request()->is('admin/member-add-service') || request()->is('admin/member-all-service') || request()->is('admin/manage-member-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-list nav-icon" aria-hidden="true"></i>
                     <p>
                        Lists
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                 <!--  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/list/add-list')}}" class="nav-link {{ request()->is('admin/list/add-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Add List</p>
                        </a>
                     </li>
                  </ul> -->
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/list/all-list')}}" class="nav-link {{ request()->is('admin/list/all-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All List</p>
                        </a>
                     </li>
                  </ul>
                 <!--  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{ url('admin/list/manage-list') }}" class="nav-link {{ request()->is('admin/list/manage-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>  Manage List</p>
                        </a> 
                     </li>
                  </ul> -->
               </li>
               <li class="nav-item {{ request()->is('admin/add-firm') || request()->is('admin/all-firm-list') || request()->is('admin/firm-allow-member') || request()->is('admin/manage-member-list') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fas fa-users nav-icon"></i>
                     <p>   
                        Team
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <!-- <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/team/add-team')}}" class="nav-link {{ request()->is('admin/team/add-team') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Add Team </p> 
                        </a>
                     </li>
                  </ul> -->
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/team/all-team')}}" class="nav-link {{ request()->is('admin/team/all-team') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Team</p>
                        </a>
                     </li>
                  </ul>
                  <!-- <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/team/manage-team')}}" class="nav-link {{ request()->is('admin/team/manage-team') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Manage Team</p>
                        </a>
                     </li>
                  </ul> -->
               </li>
              <!--  <li class="nav-item {{ request()->is('admin/firm-add-service') || request()->is('admin/firm-all-service') || request()->is('admin/manage-firm-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-dropbox nav-icon" aria-hidden="true"></i>
                     <p>
                        Integrations
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/integrations/add-integrations')}}" class="nav-link {{ request()->is('admin/firm-add-service') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Add Integrations</p>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/integrations/all-integrations')}}" class="nav-link {{ request()->is('admin/firm-all-service') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Integrations</p>
                        </a>
                     </li>
                  </ul>
               </li> -->
               <!--plan-->
               <li class="nav-item {{ request()->is('admin/add-plan') || request()->is('admin/all-plan-list') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-gg nav-icon" aria-hidden="true"></i>
                     <p> Plans
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item"> 
                        <a href="{{url('admin/plan/add-plan')}}" class="nav-link {{ request()->is('admin/add-plan') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p> Add Plan </p>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/plan/all-plan')}}" class="nav-link {{ request()->is('admin/all-plan-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Plan</p>
                        </a>
                     </li>
                  </ul>
               </li>
                <li class="nav-item {{ request()->is('admin/member-add-service') || request()->is('admin/member-all-service') || request()->is('admin/manage-member-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     <p>
                           Order
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/order/all-order')}}" class="nav-link {{ request()->is('admin/order/all-order') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Orders</p>
                        </a>
                     </li>
                  </ul>

               </li>
                   <li class="nav-item {{ request()->is('admin/member-add-service') || request()->is('admin/member-all-service') || request()->is('admin/manage-member-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fas fa-blog nav-icon" aria-hidden="true"></i>
                     <p>
                        Blog
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/blog/add-blog')}}" class="nav-link {{ request()->is('admin/blog/add-blog') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Add Blog</p>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/blog/all-blog')}}" class="nav-link {{ request()->is('admin/blog/all-blog') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Blog</p>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/blog/blog-category')}}" class="nav-link {{ request()->is('admin/blog/blog-category') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Category</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <!-- career -->
                <li class="nav-item {{ request()->is('admin/member-add-service') || request()->is('admin/member-all-service') || request()->is('admin/manage-member-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-briefcase nav-icon" aria-hidden="true"></i>
                     <p>
                        Career
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/career/add-career')}}" class="nav-link {{ request()->is('admin/career/add-career') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Add Career Position</p>
                        </a>
                     </li>
                  </ul>

                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/career/all-career')}}" class="nav-link {{ request()->is('admin/career/all-career') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Career Position</p>
                        </a>
                     </li>
                  </ul>

                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/career-list')}}" class="nav-link {{ request()->is('admin/career-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Career List</p>
                        </a>
                     </li>
                  </ul>
                  
                 
               </li>
               <!-- end career -->
               <!-- <li class="nav-item {{ request()->is('admin/add-country') || request()->is('admin/all-country-list') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fa fa-pie-chart nav-icon" aria-hidden="true"></i>
                     <p>
                        API
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/api/add-api')}}" class="nav-link {{ request()->is('admin/api/add-api') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p> Add API </p>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/api/all-api')}}" class="nav-link {{ request()->is('admin/all-country-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All API</p>
                        </a>
                     </li>
                  </ul>
               </li> -->

                   <li class="nav-item {{ request()->is('admin/professional/professional-add') || request()->is('admin/professional/professional-list') || request()->is('admin/manage-member-services') ? 'menu-open active' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="fas fa-blog nav-icon" aria-hidden="true"></i>
                     <p>
                        Professionals
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/professional/professional-add')}}" class="nav-link {{ request()->is('admin/professional/professional-add') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Add Professional</p>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{url('admin/professional/professional-list')}}" class="nav-link {{ request()->is('admin/professional/professional-list') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>All Professional</p>
                        </a>
                     </li>
                  </ul>
                  
               </li>

            </ul>
         </nav>
         <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
   </aside>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper ">
      <!-- Content Header (Page header) -->
      <div class="">
         <!--content-header-->
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <!--<h1 class="m-0">Dashboard</h1>-->
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      @yield('content')
      <footer class="main-footer text-center">
         Copyright &copy; 2020-2021 <a href="#">lusha.com</a>.All rights reserved.
      </footer>
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="{{ asset('public/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- ChartJS -->
   <script src="{{ asset('public/admin/plugins/chart.js/Chart.min.js') }}"></script>
   <!-- Sparkline -->
   <script src="{{ asset('public/admin/plugins/sparklines/sparkline.js') }}"></script>
   <!-- JQVMap -->
   <script src="{{ asset('public/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
   <!-- jQuery Knob Chart -->
   <script src="{{ asset('public/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
   <!-- daterangepicker -->
   <script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
   <!-- Summernote -->
   <script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
   <!-- overlayScrollbars -->
   <script src="{{ asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('public/admin/dist/js/adminlte.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{ asset('public/admin/dist/js/demo.js') }}"></script>
   <!-- bootstrap color picker -->
   <script src="{{ asset('public/admin/plugins//bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="{{ asset('public/admin/dist/js/pages/dashboard.js') }}"></script>
   <script>
      $(function () {
        // Page Desc
        $('#page_description').summernote()
        // Page Short desc
        $('#page_short_desc').summernote()
        $('.description').summernote()
      })
   </script>
   <!-- DataTables  & Plugins -->
   <script src="{{ asset('public/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/jszip/jszip.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
   <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
   <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $("#example2").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        $("#customDataTable").DataTable({
          "responsive": true, "lengthChange": true, "autoWidth": false,"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $("#customDataTable2").DataTable({
          "responsive": true, "lengthChange": true, "autoWidth": false,"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
   </script>

   <!-- Page specific script -->
   <script>
      $(function () {
         //Colorpicker
         $('.my-colorpicker1').colorpicker()
         //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        $('#reservationdate2').datetimepicker({
            format: 'L'
        });
        $('#start_time').datetimepicker({
            format: 'HH:mm a'
        });
        $('#end_time').datetimepicker({
            format: 'HH:mm a'
        });
        
      });
   </script>
</body>
</html>