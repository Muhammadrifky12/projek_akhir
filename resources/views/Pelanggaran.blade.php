@extends('layout.admin')
@section('title', 'Pelanggaran')
@section('content-title', 'Macam-Macam Pelanggaran')
@section('content')
    <style>
        #p {
            background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
        }
    </style>
    <div class="row">
        <div class="col-lg-4">
            <form action="" method="GET" class="form-inline">
                <input type="search" name="search" class="form-control float-right" placeholder="Cari">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default bg-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header" id="p">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-igloo"></i> Jenis Pelanggaran</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Pelanggaran</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($jenis as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->jenisku }}</td>
                                    <td><a href="{{ route('Jenis.hapus', $items->id) }}" class="btn-sm btn-circle"><i
                                                class="fas fa-trash"></i></a>
                                        <a href="{{route('Jenis.edit', $items->id)}}" class="btn-sm btn-circle"><i class="fas fa-edit"></i></a>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#jenis">
                        Tambah Jenis Pelanggaran
                    </a>
                    <div class="d-flex justify-content-end">
                        {{ $jenis->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header" id="p">
                    <div class="row">
                        <div class="col-lg-11">
                            <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-igloo"></i> Pelanggaran</h4>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pel">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Pelanggaran</th>
                                        <th scope="col">Bentuk Pelanggaran</th>
                                        <th scope="col">Skor point</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- perulangan --}}
                                    @foreach ($pelanggar as $b => $item)
                                        <tr>
                                            <th scope="row">{{ ++$b }}</th>
                                            <td>{{ $item->Pelanggaran->jenisku }}</td>
                                            <td>{{ $item->Bentukpelanggaran }}</td>
                                            <td>{{ $item->skor }}</td>
                                            <td><a href="{{route('Pelanggaran.hapus',$item->skor)}}" class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="pel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('Pelanggaran.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="id_jenis">Jenis Pelanggaran</label>
                            <select name="id_jenis" id="id_jenis" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->id }}">{{ $item->jenisku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Bentukpelanggaran">Bentuk Pelanggaran</label>
                            <input type="text" class="form-control" id="Bentukpelanggaran" name='Bentukpelanggaran'>
                        </div>
                        <div class="form-group">
                            <label for="skor">Skor Sanksi</label>
                            <select class="form-select form-control" id="skor" name='skor' value="Pilih Skor">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="80">80</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="250">250</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success" value="OK">
                            <a href="{{ route('Pelanggaran.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="jenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form method="post" action="{{ route('Jenis.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="jenisku">Jenis Pelanggaran</label>
                            <label for="Bentukpelanggaran">Bentuk Pelanggaran</label>
                            <input type="text" class="form-control" id="jenisku" name='jenisku'>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('Pelanggaran.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
