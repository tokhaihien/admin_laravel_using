<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">
    <!-- App css -->
    <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets\css\app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">

</head>

<body>
    <div class="account-pages my-5 pt-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            @if(session('msg'))
                            <div class="alert alert-warning mb-3" role="alert">
                                {{session('msg')}}
                            </div>
                            @endif
                            <div class="text-center mb-4 mt-3">
                                <a href="index.html">
                                    <span><img src="assets\images\logo-dark.png" alt="" height="30"></span>
                                </a>

                            </div>
                            <form action="{{route('login.do_login')}}" method="POST" class="p-2">
                                @csrf
                                <div class="form-group">
                                    <label for="emailaddress">Tên đăng nhập</label>
                                    <input class="form-control" type="text" id="username" required="" name="username">
                                </div>
                                <div class="form-group">
                                    <!-- <a href="" class="text-muted float-right">Forgot your password?</a> -->
                                    <label for="password">Mật khẩu</label>
                                    <input class="form-control" type="text" required="" id="password" name="password">
                                </div>

                                <!-- <div class="form-group mb-4 pb-3">
                                        <div class="custom-control custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div> -->
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">Đăng nhập </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <!-- <div class="row mt-4">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>
                            </div>
                        </div> -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{asset('assets\js\vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets\js\app.min.js')}}"></script>

</body>

</html>