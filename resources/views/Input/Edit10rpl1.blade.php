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
                            <input type="hidden" class="form-control" id="JK" name='JK' value="{{ $siswaku->JK }}">
                            <input type="hidden" name="nama" value="{{ $siswaku->nama }}">
                            <label>Pelanggaran siswa</label>
                            <select name="skor" id="skor" class="form-control" onchange="one()">
                                <option value="">--PILIH--</option>
                                @foreach ($pela as $item)
                                <option value="{{ $item->id }}">{{$item->Bentukpelanggaran }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="id_siswa" value="{{$siswaku->id}}">
                            <input type="hidden" name="tanggal" value="{{$today}}">
                            <div class="form-group">
                                <label for="penanganan">Penanganan</label>
                                <select name="penanganan" id="penanganan" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($bk as $items)
                                    <option value="{{ $items->nama }}">{{ $items->gurubk->nama }}</option>
                                    @endforeach
                                    @foreach ($tatib as $ite)
                                    <option value="{{ $ite->nama }}">{{ $ite->gurutatib->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('Input10rpl1.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function one(){
            var val = document.getElementById('skor').value;
            
            document.getElementById('bentuk').value = val;
        }
    </script>
    @endsection