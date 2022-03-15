{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center my-3">

            <div class="col-xl-7 my-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class=" justify-content-center col-lg-10 m-20">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Login</h1>
                                    </div>
                                      <form class="user justify-content-center  ">
                                        <div class="mb-2">
                                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                                          </div>
                                        <div class="mb-2">
                                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                          </div>
                                          <div class="mb-2">
                                            <button type="submit" class="btn btn-secondary">Login</button>
                                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Login</a>
                                        </div>
                                          
                                        
                                    </form>
                                    
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center my-5">

            <div class="col-xl-7 my-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class=" justify-content-center col-lg-10 m-20">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                      <form action="/login" method="GET" enctype="multipart/form-data"
                                         class="user justify-content-center  ">
                                         @csrf
                                        <div class="form-group justify-content-center">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username..." autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" autofocus required> 
                                        </div>
                                        <div class="form-group">
                                        
                                        </div>
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-user btn-block" type="submit">Login</button>
                                                    {{-- <small class="d-block text-center mt-3"> Not registered? <a href="{{ url('register') }}">register Now!</a></small> --}}

                                                </div>

                                            </div>
 
                                        </div>
                                       
                                        
                                    </form>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
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