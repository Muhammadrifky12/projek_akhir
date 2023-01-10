@extends('layout.admin')
@section('title', 'Edit skor')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="{{ route('Input10rpl1.update', $siswaku->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="nisn" name='nisn'
                                    value="{{ $siswaku->nisn }}">
                                <input type="hidden" class="form-control" id="id_kelas" name='id_kelas'
                                    value="{{ $siswaku->id_kelas }}">
                                <input type="hidden" class="form-control" id="JK" name='JK'
                                    value="{{ $siswaku->JK }}">
                                <input type="hidden" name="nama" value="{{ $siswaku->nama }}">
                                <label for="skor">Pelanggaran siswa</label>
                                <select name="skor" id="skor" class="form-control">
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
    @endsection
