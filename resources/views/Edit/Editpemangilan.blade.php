@extends('layout.admin')
@section('title', 'Status')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="{{ route('dashboard.update', $dash->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="nisn" name='nisn' value="{{ $dash->nisn }}">
                            <input type="hidden" class="form-control" id="id_kelas" name='id_kelas'
                                value="{{ $dash->id_kelas }}">
                            <input type="hidden" class="form-control" id="JK" name='JK' value="{{ $dash->JK }}">
                            <input type="hidden" name="nama" value="{{ $dash->nama }}">
                            <input type="hidden" name="skor" id="skor" value="{{ $dash->skor }}">
                            <label for="status">Status Siswa</label>
                            <select class="form-control form-select" id="status" name='status'>
                                @if ($dash->skor <= 149 && $dash-> skor >55)
                                    <option value="">--Pilih--</option>
                                    @if ($dash->skor <= 75 && $dash-> skor >55)
                                    <option value="Pemanggilan Pertama">Pemanggilan Pertama</option>
                                    @endif
                                    @if ($dash->skor <= 95 && $dash-> skor >=76)
                                    <option value="Pemanggilan Kedua">Pemanggilan Kedua</option>
                                    @endif
                                    @if ($dash->skor <= 149 && $dash-> skor >=96)
                                    <option value="Pemanggilan Ketiga">Pemanggilan Ketiga</option>
                                    @endif
                                    @endif
                                    @if ($dash->skor <= 249 && $dash-> skor >=150)
                                        <option value="">--Pilih--</option>
                                        <option value="Sedang Di Skorsing">Sedang Di Skorsing</option>
                                        @endif
                                        @if ($dash->skor >=250)
                                        <option value="">--Pilih--</option>
                                        <option value="Siswa Telah Dikeluarkan">Siswa Telah Dikeluarkan</option>
                                        @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('dashboard.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @endsection