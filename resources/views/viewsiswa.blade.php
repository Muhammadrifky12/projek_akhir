@extends('layout.admin')
@section('title', 'Siswa')
@section('content')
    <style>
        #p {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }

        #k {
            background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
        }
    </style>
    <script src="{{ asset('template/js/popup.js') }}"></script>
    <div class="row ">
        <div class=" col-lg-12">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card shadow mb-4">
                            <div class="card-header" id="p">
                                <form action="" method="GET" class="form-inline">
                                    <input type="search" name="search" class="form-control float-right"
                                        placeholder="Cari">
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
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header" id="p">
                            <div class="row">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#tambah">
                                        Tambah Siswa
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
                                                    <th scope="col">Nisn</th>
                                                    <th scope="col">Nama Siswa</th>
                                                    <th scope="col">Kelas</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- perulangan --}}
                                                @foreach ($data6 as $b => $items)
                                                    <tr>
                                                        <th scope="row">{{ ++$b }}</th>
                                                        <td>{{ $items->nisn }}</td>
                                                        <td>{{ $items->nama }}</td>
                                                        <td>{{ $items->id_kelas }}</td>
                                                        <td>{{ $items->JK }}</td>
                                                        <td><a href="{{ route('viewsiswa.hapus', $items->nama) }}"
                                                                class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                                            <a href="" class="btn-sm btn-circle"><i
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
                    <form method="post" action="{{ route('viewsiswa.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Nisn">Nisn</label>
                                <input type="text" class="form-control" id="nisn" name='nisn'>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name='nama'>
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">Kelas</label>
                                <select name="id_kelas" id="id_kelas" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->kelass }}">{{ $item->kelass }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="JK">Jenis Kelamin</label>
                                <select class="form-select form-control" id="JK" name='JK'
                                    value="Pilih Jenis Kelamin">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="status" name='status' value="Belum Dilakukan Pemanggilan">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="skor" name='skor' value="0">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success" value="OK">
                            <a href="{{ route('viewsiswa.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
