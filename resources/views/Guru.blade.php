@extends('layout.admin')
@section('title', 'Guru')
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
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header" id="p">
                    <div class="row">
                        <div class="col-lg-10">
                            <h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-campground"></i> Tabel Guru</h5>
                        </div>
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
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guru as $b => $items)
                                            <tr>
                                                <th scope="row">{{ ++$b }}</th>
                                                <td>{{ $items-> nip }}</td>
                                                <td>{{ $items-> nama }}</td>
                                                <td>{{ $items-> JK }}</td>
                                                <td><a href="{{ route('Guru.hapus', $items ->nama) }}" class="btn-sm btn-circle"><i
                                                            class="fas fa-trash"></i></a>
                                                    <a href="" class="btn-sm btn-circle"><i
                                                            class="fas fa-edit"></i></a>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                                <div class="card d-flex justify-content-end">
                                    {{ $guru->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header" id="p">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-vector-square"></i> Guru BK</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Guru BK Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($gurubk as $i1 => $item2)
                            <tr>
                                <th scope="row">{{ ++$i1 }}</th>
                                <td>{{ $item2-> nama }}</td>
                                <td>{{ $item2-> deskripsi }}</td>
                                <td><a href="{{ route('Gurubk.hapus', $item2 ->nama) }}" class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn-sm btn-circle"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#k">
                        Tambah Guru BK
                    </a>
                    <div class="d-flex justify-content-end">
                        {{ $gurubkk->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header" id="p">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-igloo"></i> Guru Tatip</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($tatib as $g => $hallo)
                            <tr>
                                <th scope="row">{{ ++$g }}</th>
                                <td>{{ $hallo-> id_nama }}</td>
                                <td><a href="{{ route('Gurutatib.hapus', $hallo ->id_nama) }}" class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn-sm btn-circle"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#tatib">
                        Tambah Guru Tatib
                    </a>
                    <div class="d-flex justify-content-end">
                        {{ $tatibb->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal guru -->
    <div class="modal fade" id="Guru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                <label for="JK">Jenis Kelamin</label>
                                <select class="form-select form-control" id="JK"
                                    name='JK'value="{{ old('JK') }}">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success">
                            <a href="{{ route('Guru.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal guru bk-->
    <div class="modal fade" id="k" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Guru BK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('Gurubk.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Guru</label>
                            <select name="nama" id="nama" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($bk as $item)
                                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deksripsi">Kelas</label>
                            <select class="form-select form-control" id="deskripsi" name='deskripsi'>
                                <option value="Kelas-10">Kelas-10</option>
                                <option value="Kelas-11">Kelas-11</option>
                                <option value="Kelas-12">Kelas-12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('Guru.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal guru tatib-->
    <div class="modal fade" id="tatib" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Guru BK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('Gurutatib.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="id_nama">Nama Guru</label>
                            <select name="id_nama" id="id_nama" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($bk as $item)
                                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('Guru.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
