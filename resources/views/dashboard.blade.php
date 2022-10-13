@extends('layout.admin')
@section('title' , 'Dashboard')
@section('content-title','Dashboard')
@section('content')
<style>
    #s {
        background: linear-gradient(to left, #33cc33 0%, #33cc33 100%);
    }
    #se{
        background: linear-gradient(to left, #ffcc00 0%, #ffcc00 100%);
    }
    #sl {
        background: linear-gradient(to left, #ff9933 0%, #ff6600 100%);
    }
    #ss {
        background: linear-gradient(to left, #ff3300 0%, #ff3300 100%);
    }
    </style>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4"> 
            <div class="card-header" id="s">
                <div class="row">
                    <h6 class="m-0 font-weight-bold text-primary">Pelanggaran Ringan : Peringatan Petugas Ketertipan</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4"> 
            <div class="card-header" id="se">
                <div class="row">
                    <h6 class="m-0 font-weight-bold text-primary">Pelanggaran Sedang : Panggilan Orang Tua</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4"> 
            <div class="card-header" id="sl">
                <div class="row">
                    <h6 class="m-0 font-weight-bold text-primary">Pelanggaran Berat : Skorsing</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4"> 
            <div class="card-header" id="ss">
                <div class="row">
                    <h6 class="m-0 font-weight-bold text-primary">Pelanggaran Berat : Dikembalikan Ke Orang Tua/Di Keluarkan Dari Sekolah</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 