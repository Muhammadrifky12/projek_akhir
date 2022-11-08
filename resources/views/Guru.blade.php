@extends('layout.admin')
@section('title' , 'Guru')
@section('content')
<style>
    #p {
        background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
    }
    </style>
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4"> 
            <div class="card-header" id="p">
                <form action="" method="GET" class="form-inline">
                  <input type="search" name="search" class="form-control float-right" placeholder="Cari">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default bg-primary">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
</div>
@endif
<div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4"> 
                        <div class="card-header" id="p">
                            <div class="row">
                                <div class="col-lg-10"></div>
                              <div class="col-lg-2">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Guru">
                                  Tambah Guru
                                </button>  
                              </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow mb-4">
                                <div class="card-body ">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">nip</th>
                                            <th scope="col">Nama Guru</th>
                                            <th scope="col">Bidang</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($guru as $b => $items)
                                            <tr>
                                              <th scope="row">{{++$b}}</th>
                                              <td>{{$items -> nip }}</td>
                                              <td>{{$items -> nama }}</td>
                                              <td>{{$items -> bidang }}</td>
                                              <td>{{$items -> JK }}</td>
                                              <td><a href="" class="btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                                <a href="" class="btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                              </a></td>
                                            </tr>
                                            @endforeach
                                    </table>
                                    <div class="card-footer d-flex justify-content-end">
                                      {{ $guru->links() }}
                                    </div>
                                </div>
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
<div class="modal fade" id="Guru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
          <form method="post" action="{{ route('Guru.store') }}">
            @csrf
            <div class="form-group">
              <div class="form-group">
                <label for="nip">nip</label>
                <input type="text" class="form-control" id="nip" name='nip'>
            </div>
            <div class="form-group">
                <label for="nama">Nama Guru</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="bidang">Bidang Guru</label>
                <input type="text" class="form-control" id="bidang" name="bidang">
            </div>
            <div class="form-group">
                <label for="JK">Jenis Kelamin</label>
                <select class="form-select form-control" id="JK" name='JK'value="{{ old('JK') }}">
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit"  class="btn-success">
          <a href="{{route('Guru.index')}}" class="btn btn-danger">Batal</a>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection 