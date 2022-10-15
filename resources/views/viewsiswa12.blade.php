@extends('layout.admin')
@section('title' , 'Kelas-12 RPL 1')
@section('content')
<style>
  #p {
      background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
  }
  #k{
      background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
  }
  </style>
   
<div class="row ">
    <div class=" col-lg-12">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{asset ('./template/img/RPL.png')}}" width="250" alt="Rekayasa Perangkat Lunak">    
                    </div>
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-0">
                                         <div class="text-s font-weight-bold text-primary text-uppercase mb-4">
                                            Kaprodi Jurusan</div>
                                        <div class="">
                                            Nama:
                                            <br>
                                            Dra. Retno Pinasti
                                            <br>
                                            Bidang keahlihan:
                                            <br>
                                            Produktif Rekayasa Perangkat Lunak
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                         <img src="{{asset ('./template/img/bupin.jpg')}}" width="150" alt="Dra.Retno Pinasti">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4"> 
                        <div class="card-header" id="p">
                            <div class="row">
                              <div class="col-lg-2">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelas 10 RPL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/viewsiswa">10 RPL 1</a>
                                    <a class="dropdown-item" href="/viewsiswa10rpl2">10 RPL 2</a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelas 11 RPL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/viewsiswa11">11 RPL 1</a>
                                    <a class="dropdown-item" href="/viewsiswa11rpl2">11 RPL 2</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelas 12 RPL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/viewsiswa12">12 RPL 1</a>
                                    <a class="dropdown-item" href="/viewsiswa12rpl2">12 RPL 2</a>
                                </div>
                            </div>
                              <div class="col-lg-2">
                              <a href="{{ route('viewsiswa12.create') }}" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah">
                                Tambah Siswa
                              </a>  
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
                                            <th scope="col">Nisn</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            {{-- perulangan --}}
                                            @foreach ($data6 as $b => $items)
                                            <tr>
                                              <th scope="row">{{++$b}}</th>
                                              <td>{{$items -> nisn }}</td>
                                              <td>{{$items -> nama }}</td>
                                              <td>{{$items -> kelas }}</td>
                                              <td><a href="" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                                <a href="" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                              </a></td>
                                            </tr>
                                            @endforeach
                                            
                                          </tbody>
                                    </table>
                                        <div class="card-footer d-flex justify-content-end">
                                            {{ $dataa->links() }}
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
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('viewsiswa12.store') }}">
          @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="Nisn">Nisn</label>
              <input type="text" class="form-control" id="nisn" name='nisn' >
          </div>
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name='nama'>
          </div>
          <div class="form-group">
              <label for="alamat">Kelas</label>
              <input type="text" class="form-control" id="kelas" name='kelas'>
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit"  class="btn-success">
        <a href="{{route('viewsiswa12.index')}}" class="btn btn-danger">Batal</a>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection 