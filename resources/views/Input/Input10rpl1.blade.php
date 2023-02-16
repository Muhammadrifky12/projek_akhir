@extends('layout.admin')
@section('title', 'Input Pelanggaran')
@section('content-title','Input point Siswa')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3">
                <form action="search" method="GET" class="form-inline">
                    <input type="search" name="search" class="form-control float-right" placeholder="Search Name...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default bg-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 form-inline" style="text-align: left">
                <form action="/searchklas" method="GET" class="form-inline">
                    <select class="form-control" name="search">
                        <option value="">-- Cari Kelas --</option>
                        @foreach ($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->kelass }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default bg-primary" id="searchklas">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="card shadow">
            <div class="card-header" id="p">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-7">
                    </div>
                    <div class="col-lg-1" style="text-align: right">
                        <button type="button" class="btn-circle btn-m btn-danger" data-bs-toggle="modal"
                            data-bs-target="#bek">
                            <i class="fas fa-file-pdf" style="color: white"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nisn</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Skor</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- perulangan --}}
                        @foreach ($siswa as $b => $items)
                        <tr>
                            <th scope="row">{{ ++$b }}</th>
                            <td>{{ $items->nisn }}</td>
                            <td>{{ $items->nama }}</td>
                            <td>{{ $items->kelas1->kelass }}</td>
                            <td>{{ $items->JK }}</td>
                            <td>{{ $items->skor }}</td>
                            <td><a href="{{ route('Input10rpl1.edit', $items->id) }}" class="btn-sm btn-circle"><i
                                        class="fas fa-edit"></i></a>
                                </a>
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
<div class="modal fade" id="bek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <select class="form-control" name="id_kelas" id="id_kelas">
                        <option value="">--PILIH--</option>
                        @foreach ($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->kelass }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <a href="" onclick="this.href='/export/'+document.getElementById('id_kelas').value"
                        class="btn btn-danger">Cetak pdf <i class="fas fa-print"></i></a>
                </div>
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