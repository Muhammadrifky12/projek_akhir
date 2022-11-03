@extends('layout.admin')
@section('title' , 'Input Pelanggaran')
@section('content-title','punten')
@section('content')
<style>
    #p {
        background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
    }
    #pp {
        background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
    }
    #k{
        background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
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
  <div class="row ">
      <div class=" col-lg-12">
              <div class="card-body p-0">
                  
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card shadow mb-4"> 
                          <div class="card-header" id="p">
                          </div>
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="card shadow mb-4">
                                  <div class="card-body ">
                                      <table class="table">
                                          <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Nisn</th>
                                              <th scope="col">Nama Siswa</th>
                                              <th scope="col">Kelas</th>
                                              <th scope="col">Jenis Kelamin</th>
                                              <th scope="col">Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              {{-- perulangan
                                              @foreach ($data6 as $b => $items)
                                              <tr>
                                                <th scope="row">{{++$b}}</th>
                                                <td>{{$items -> nisn }}</td>
                                                <td>{{$items -> nama }}</td>
                                                <td>{{$items -> kelas }}</td>
                                                <td>{{$items -> JK    }}</td>
                                                <td><a href="" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                                  <a href="" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                                </a></td>
                                              </tr>
                                              @endforeach --}}
                                          </tbody>
                                      </table>
                                       {{-- <div class="card-footer d-flex justify-content-end">
                                          {{ $dataa->links() }}
                                       </div> --}}
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
@endsection 