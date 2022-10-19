@extends('login.login')
@section('title' , 'Login')
@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
    </div>
    @endif
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="">
                            <img src="{{asset ('./template/img/logo1.jpg')}}" width="455" height="575" alt=""></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
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
                                <form class="user" method="POST" action="login">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="LOGIN" class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>
                                {{-- <div class="text-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                                        Buat Akun Baru
                                      </button> 
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
{{-- <!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <input type="text" class="form-control" id="name" name='name' placeholder="Ketikkan Nama ">
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" 
                placeholder="Ketikkan Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Ketikkan Password">
            </div>
        </div>
        <div class="form-group">
            <label for="name">Silahkan Pilih Role</label>
            <select class="form-select form-control" id="role" name='role'>
                <option value="laki-laki">walas</option>
                <option value="perempuan">admin</option>
                </select>
        </div>
        <div class="modal-footer">
          <input type="submit"  class="btn-success">
          <a href="{{route('login.index')}}" class="btn btn-danger">Batal</a>
        </div>
      </form>
      </div>
    </div>
  </div> --}}
@endsection 