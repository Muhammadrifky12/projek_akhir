@extends('layout.admin')
@section('title' , 'Siswa')
@section('content-title','Pilih Kelas')
@section('content')

<style>
    #p {
        background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
    }
    #k{
        background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
    }
    </style>
    <script src="{{ asset ('template/js/popup.js' ) }}"></script>
<div class="row ">
    <div class=" col-lg-12">
            <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4"> 
                        <div class="card-header" id="p">
                            <div class="row">
                            <div class="col-lg-2">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelas 10 RPL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/viewsiswa">10 RPL 1</a>
                                    <a class="dropdown-item" href="/viewsiswa10rpl2">10 RPL 2</a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelas 11 RPL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/viewsiswa11">11 RPL 1</a>
                                    <a class="dropdown-item" href="/viewsiswa11rpl2">11 RPL 2</a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kelas 12 RPL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/viewsiswa12">12 RPL 1</a>
                                    <a class="dropdown-item" href="/viewsiswa12rpl2">12 RPL 2</a>
                                </div>
                            </div>
                        </div>
                        </div>
@endsection 