@extends('layout.admin')
@section('title', 'Edit Pelanggaran')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="{{ route('Pelanggaran.update', $pel1->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_jenis">Jenis Pelanggaran</label>
                            <select name="id_jenis" id="id_jenis" class="form-control">
                                <option value="">{{ $pel1->pelanggaran->jenisku }}</option>
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->id }}">{{ $item->jenisku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Bentukpelanggaran">Bentuk Pelanggaran</label>
                            <input type="text" class="form-control" id="Bentukpelanggaran" name='Bentukpelanggaran'
                                value="{{ $pel1->Bentukpelanggaran }}">
                        </div>
                        <div class="form-group">
                            <label for="skor">Skor Sanksi</label>
                            <select class="form-select form-control" id="skor" name='skor' value="{{$pel1->skor}}">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="80">80</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="250">250</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success" value="OK">
                            <a href="{{ route('Pelanggaran.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
