@extends('layout.admin')
@section('title', 'Dashboard')
@section('content')
    <style>
        #pp {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }
    </style>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $siswa }} Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Pelanggaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $histor }} Pelanggaran</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Siswa Yang Belum <br> Melakukan Pelanggaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $siswaku }} Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div id="pp" class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Pelanggaran Ringan : Panggilan Orang Tua
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Point</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            {{-- @foreach ($histor as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->nama }}</td>
                                    <td>{{ $items->id_kelas }}</td>
                                    <td><a onclick="show({{ $items->id }})" class="btn-sm btn-info"><i
                                                class="fas fa-folder-open"></i></a>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#historku"><i class="fas fa-edit"></i></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div id="pp" class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Pelanggaran Ringan : Panggilan Orang Tua
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Point</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            {{-- @foreach ($histor as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->nama }}</td>
                                    <td>{{ $items->id_kelas }}</td>
                                    <td><a onclick="show({{ $items->id }})" class="btn-sm btn-info"><i
                                                class="fas fa-folder-open"></i></a>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#historku"><i class="fas fa-edit"></i></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
