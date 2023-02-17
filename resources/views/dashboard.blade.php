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
                            Jumlah Pelanggaran <br> yang terjadi</div>
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
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div id="pp" class="card-header">
                <div class="row">
                    <div class="col-lg-8">
                        <h6 class="m-0 font-weight-bold text-dark">Penanganan Sanksi Ringan : Panggilan Orang Tua serta
                            Pembinaan</h6>
                    </div>
                    <div class="col-lg-4" style="text-align: right">
                        <button type="button" class="btn-xm btn-circle btn-success" data-bs-toggle="modal" data-bs-target="#tambah">
                            <i class="fas fa-fas-info"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Point</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- perulangan --}}
                        @foreach ($ortu as $b => $ortuu)
                        <tr>
                            <th scope="row">{{ ++$b }}</th>
                            <td>{{ $ortuu->nama }}</td>
                            <td>{{ $ortuu->kelas1->kelass }}</td>
                            <td>{{ $ortuu->skor }}</td>
                            <td>{{ $ortuu->status }}</td>
                            <td><a href="{{ route('dashboard.edit', $ortuu->id) }}"
                                    class="btn-sm btn-primary btn-circle"><i class="fas fa-edit"></i></a>
                                </a>
                                <a href="{{route('dashboard.export',$ortuu->id)}}" class="btn-sm btn-circle btn-danger"
                                    data-toggle="tooltip" data-placement="top" title="Download pdf"><i
                                        class="fas fa-file-pdf"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" d-flex justify-content-end">
                    {{ $paginate->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div id="pp" class="card-header">
                <h6 class="m-0 font-weight-bold text-dark">Penanganan Sanksi Sedang : Skorsing dan Paggilan Orang Tua
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Point</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- perulangan --}}
                        @foreach ($skorsing as $b => $skor)
                        <tr>
                            <th scope="row">{{ ++$b }}</th>
                            <td>{{ $skor->nama }}</td>
                            <td>{{ $skor->kelas1->kelass }}</td>
                            <td>{{ $skor->skor }}</td>
                            <td>{{ $skor->status }}</td>
                            <td><a href="{{ route('dashboard.edit', $skor->id) }}"
                                    class="btn-sm btn-primary btn-circle"><i class="fas fa-edit"></i></a>
                                </a>
                                <a href="{{route('dashboard.export',$skor->id)}}" class="btn-sm btn-circle btn-danger"
                                    data-toggle="tooltip" data-placement="top" title="Download pdf"><i
                                        class="fas fa-file-pdf"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" d-flex justify-content-end">
                    {{ $paginate->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div id="pp" class="card-header">
                <h6 class="m-0 font-weight-bold text-dark">Penanganan Sanksi Berat : Paggilan Orang Tua dan Siswa
                    Dikembalikan
                    Kepada Orang Tua
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Point</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- perulangan --}}
                        {{-- @dd ($out) --}}
                        @foreach ($out as $b => $outt)
                        <tr>
                            <th scope="row">{{ ++$b }}</th>
                            <td>{{ $outt->nama }}</td>
                            <td>{{ $outt->kelas1->kelass }}</td>
                            <td>{{ $outt->skor }}</td>
                            <td>{{ $outt->status }}</td>
                            <td><a href="{{ route('dashboard.edit', $outt->id) }}"
                                    class="btn-sm btn-primary btn-circle"><i class="fas fa-edit"></i></a>
                                <a href="{{route('dashboard.export',$outt->id)}}" class="btn-sm btn-circle btn-danger"
                                    data-toggle="tooltip" data-placement="top" title="Download pdf"><i
                                        class="fas fa-file-pdf"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" d-flex justify-content-end">
                    {{ $paginate->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection