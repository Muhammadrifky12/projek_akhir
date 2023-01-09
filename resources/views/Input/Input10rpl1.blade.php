@extends('layout.admin')
@section('title', 'Input Pelanggaran')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow mb-4">
                        <div class="card-header" id="p">
                            <form action="" method="GET" class="form-inline">
                                <input type="search" name="search" class="form-control float-right"
                                    placeholder="Ketikkan Kelas">
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
            <div class="card shadow">
                <div class="card-header" id="p">
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="" class="btn-lg btn-circle btn-danger" data-toggle="tooltip"
                                data-placement="top" title="Download pdf"><i class="fas fa-file-pdf"></i></a>
                        </div>
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-7">
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bek">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($skor as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->Nama }}</td>
                                    <td>{{ $items->Skor }}</td>
                                    <td><a href="" class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                        <a href="{{ route('Input10rpl1.edit', $items->id) }}" class="btn-sm btn-circle"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
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
    <div class="modal fade" id="bek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('Input10rpl1.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Siswa</label>
                            <select name="Nama" id="Nama" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="skor">Pelanggaran siswa</label>
                            <select name="Skor" id="Skor" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($pela as $item)
                                    <option value="{{ $item->skor }}">{{ $item->Bentukpelanggaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('Input10rpl1.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        #p {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }

        #k {
            background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
        }
    </style>
@endsection
