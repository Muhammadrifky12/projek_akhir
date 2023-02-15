@extends('layout.admin')
@section('title', 'Edit Siswa')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="{{ route('viewsiswa.update', $is->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Nisn">Nisn</label>
                            <input type="text" class="form-control" id="nisn" name='nisn' value="{{$is->nisn}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name='nama' value="{{$is->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select name="id_kelas" id="id_kelas" class="form-control">
                                <option value="{{$is->id_kelas}}">{{$is->kelas1->kelass}}</option>
                                @foreach ($kelas as $item)
                                <option value="{{ $item->id }}">{{ $item->kelass }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="JK">Jenis Kelamin</label>
                            <select class="form-select form-control" id="JK" name='JK' value="Pilih Jenis Kelamin">
                                <option value="{{$is->JK}}">{{$is->JK}}</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="status" name='status'
                                value="{{$is->status}}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="skor" name='skor' value="{{$is->skor}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="OK">
                        <a href="{{ route('viewsiswa.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection