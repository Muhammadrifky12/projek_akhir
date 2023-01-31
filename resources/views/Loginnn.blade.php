@extends('login.login')
@section('title', 'Login')
@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card border-0 shadow-lg my-5">
                    <div class="card-body p-0" id="ppppp">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('./template/img/logo1.jpg') }}" width="455" height="575"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-white-900 mb-4" id="k">Silahkan Login</h1>
                                    </div>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul type="circle">
                                                @foreach ($errors->all() as $item)
                                                    <li>
                                                        {{ $item }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="user" method="POST" action="login">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Email" class="text-white" id="p">Email</label>
                                            <input type="email" class="form-control form-control-user" name="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ketik Email mu">
                                        </div>
                                        <div class="form-group">
                                            <label for="Password" class="text-white" id="p">Password</label>
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="exampleInputPassword" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label text-white" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="LOGIN" class="btn btn-success btn-user btn-block">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="{{route('Register.index')}}" type="button" class="btn btn-primary"> Buat Akun Baru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('login.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="name">Silahkan Membuat Akun</label>
                                <input type="text" class="form-control" id="name" name='name'
                                    placeholder="Ketikkan Nama ">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ketikkan Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password"
                                    id="exampleInputPassword" placeholder="Ketikkan Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Silahkan Pilih Role</label>
                            <select class="form-select form-control" id="role" name='role'>
                                <option value="walikelas">walas</option>
                                <option value="admin">admin</option>
                                <option value="Tatib">Tatib</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success">
                            <a href="{{ route('login.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <style>
            #k {
                color: #fff;
                text-shadow: 0 0 5px #fff,
                    0 0 10px #fff, 0 0 15px #0073e6,
                    0 0 20px #0073e6, 0 0 25px #0073e6,
                    0 0 30px #0073e6, 0 0 35px #0073e6;
            }

            #ppppp {
                background: linear-gradient(to bottom, #000066 0%, #000066 100%);
                --angle: 0deg;
                border: 1rem solid;
                border-image: linear-gradient(var(--angle), #12c2e9, #c471ed, #f64f59) 1;
                animation: 5s rotate linear infinite;
            }

            @keyframes rotate {
                to {
                    --angle: 360deg;
                }
            }

            @property --angle {
                syntax: '<angle>';
                initial-value: 0deg;
                inherits: false;
            }
        </style>
    @endsection
