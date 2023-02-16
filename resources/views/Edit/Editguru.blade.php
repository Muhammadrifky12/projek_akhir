@extends('layout.admin')
@section('title', 'Edit Guru')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('Guru.update', $Gurukuh->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nip">nip</label>
                            <input type="text" class="form-control" id="nip" name='nip' value="{{$Gurukuh->nip}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Guru</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$Gurukuh->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="JK">Jenis Kelamin</label>
                            <select class="form-select form-control" id="JK" name='JK' value="{{$Gurukuh->JK}}">
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
    @endsection