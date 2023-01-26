@extends('layout.admin')
@section('title', 'Edit history')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="{{ route('History.update', $historykuh->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="hidden" name="id_siswa" id="id_siswa" value="{{$historykuh->id}}">
                            <input type="date" class="form-control" id="tanggal" name='tanggal' value="{{$historykuh->tanggal}}">
                        </div>
                        <div class="form-group">
                            <label for="bentukpelanggaran">Berapa Pelanggaran</label>
                            <input type="number" class="form-control" id="bentukpelanggaran" name='bentukpelanggaran' value="{{$historykuh->bentukpelanggaran}}">
                        </div>
                        <div class="form-group">
                            <label for="penanganan">Penanganan</label>
                            <select name="penanganan" id="penanganan" class="form-control">
                                <option value="{{$historykuh->penanganan}}">{{$historykuh->penanganan1->nama}}</option>
                                @foreach ($bkk as $items)
                                    <option value="{{ $items->nama }}">{{ $items->gurubk->nama }}</option>
                                @endforeach
                                @foreach ($tatibb as $items)
                                    <option value="{{ $items->nama }}">{{ $items->gurutatib->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit"  class="btn btn-success" value="OKE">
                        <a href="{{ route('History.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection