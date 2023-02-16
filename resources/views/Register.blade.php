@extends('login.login')
@section('title', 'Register')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('./template/img/logo1.jpg') }}" width="455" height="575" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="{{route('Register.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="name" id="name"
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email" name="email"
                                    placeholder="Ketik Email Anda">
                            </div>
                            <div class="form-group">
                                <select class="form-select form-control" id="role" name='role'>
                                    <option value="">--pilih--</option>
                                    <option value="Walikelas">Walikelas</option>
                                    <option value="admin">Admin</option>
                                    <option value="Tatib">Tatib</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user byrcpt" id="password"
                                    name="password" placeholder="Ketikkan Password">
                            </div>
                            <input type="submit" value="register Account" class="btn btn-success btn-user btn-block">
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection