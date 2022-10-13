<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Register</title>

     <!-- Custom fonts for this template-->
        <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset ('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    
    </head>
    
    <body class="bg-gradient-primary">
    
        <div class="container">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="">
                            <img src="{{asset ('./template/img/regis.png')}}" width="455" height="575" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                                </div>
                                
                                @if (count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul type="circle">
                                        @foreach ($errors->all() as $item)
                                            <li>
                                                {{$item}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form method="post" enctype="multipart/form-data" action="{{ route('register.store') }}">
                                    @csrf
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama depan" value="{{ old('nama_depan') }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" value="{{ old('nama_belakang') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="Text" class="form-control" id="Password" name="Password" placeholder="Password" value="{{ old('Password') }}">
                                        </div>
                                    </div>
                                    <a href="{{route('login.index')}}" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
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