@extends('layout.admin')
@section('title', 'Tambah History')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul type="circle">
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('History.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="hidden" name="id_siswa" id="id_siswa" value="{{$siswa->id}}">
                                <input type="date" class="form-control" id="tanggal" name='tanggal'>
                            </div>
                            <div class="form-group">
                                <label for="bentukpelanggaran">Berapa Pelanggaran</label>
                                <input type="number" class="form-control" id="bentukpelanggaran" name='bentukpelanggaran'>
                            </div>
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
                        <div class="modal-footer">
                            <input type="submit"  class="btn btn-success" value="OKE">
                            <a href="{{ route('History.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
