@extends('layout.admin')
@section('title', 'History pelanggaran')
@section('content-title', 'Data Pelanggaran siswa')
@section('content')
    <style>
        #p {
            background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
        }

        #pp {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }

        #k {
            background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header" id="pp">
                    <div class="row">
                        <div class="col-lg-10 text-white">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-yin-yang"></i>Data Siswa</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nisn</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($histor as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->nisn }}</td>
                                    <td>{{ $items->nama }}</td>
                                    <td>{{ $items->id_kelas }}</td>
                                    <td><a onclick="show({{ $items->id }})" class="btn-sm btn-info"><i
                                                class="fas fa-folder-open"></i></a>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#historku"><i class="fas fa-edit"></i></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4"> 
                <div class="card-header" id="pp">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-yin-yang"></i>History Pelanggaran</h6>
                </div>
                <div id="history" class="card-body"> 
                  <h6 class="text-center">Pilih Siswa terlebih dahulu</h6>
                </div>
                 </div>
               </div>
        </div>
    </div>
    <script>
        function show(id) {
            $.get('History/' + id, function(data) {
                $('#history').html(data);
            })
        }
    </script>
    <div class="modal fade" id="historku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('History.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="id_siswa">Siswa</label>
                                <select name="id_siswa" id="id_siswa" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($histor as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name='tanggal'>
                                <input type="hidden" class="form-control" id="pelanggar" name='pelanggar' value="1">
                            </div>
                            <div class="form-group">
                                <label for="bentukpelanggaran">Bentuk Pelanggaran</label>
                                <select name="bentukpelanggaran" id="bentukpelanggaran" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($pelala as $item)
                                        <option value="{{ $item->Bentukpelanggaran }}">{{ $item->Bentukpelanggaran }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="skor">Skor</label>
                                <select name="skor" id="skor" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($pelala as $item)
                                        <option value="{{ $item->skor }}">{{ $item->Bentukpelanggaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="penanganan">Penanganan</label>
                                <select name="penanganan" id="penanganan" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($bk as $items)
                                        <option value="{{ $items->nama }}">{{ $items->nama }}</option>
                                    @endforeach
                                    @foreach ($tatib as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success" value="OK">
                            <a href="{{ route('History.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
