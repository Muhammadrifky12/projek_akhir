@extends('layout.admin')
@section('title', 'Edit Pelanggaran')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="{{ route('Jenis.update', $jenis->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" class="form-control" id="jenisku" name='jenisku'
                                    value="{{ $jenis->jenisku }}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="OKE">
                                <a href="{{ route('Pelanggaran.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
