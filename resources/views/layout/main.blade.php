{{-- @php
 use App\Models\Login;
 $data = Login::where('username',{{ Session::get('nama') }});   
@endphp --}}
</html><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ngopi</title>

  <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Cafe Bisa Ngopi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     
      <!-- Nav Item - Login -->
      @if(Session::get('role')=="kasir")
      <li class="nav-item">
        <a class="nav-link" href="{{url('kasir')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Transaksi</span></a>
      </li>
      @elseif(Session::get('role')=="admin")
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>User</span></a>
      </li>
           
      @else
     
  
     
          
      
    
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('manajer')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Menu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('laporan')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span></a>
      </li>
      
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ url('logout') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
      </div>

    </ul>
    <!-- End of Sidebar -->

    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <nav class="navbar navbar-expand navbar-primary bg-primary topbar static-top justify-content-center ">

      <div class="text center ">
        <h3 style="color: white"> Cafe Bisa Ngopi</h3>

      </div>

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button> 
        

    </nav>

      <!-- Main Content -->
      <div id="content">
        <br>
        <div class="container">
          <section class="content">
            @yield('head')
          </section>
        </div>
        <div class="container">
          <section class="content">
            @yield('content')
          </section>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2022</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="assets/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>