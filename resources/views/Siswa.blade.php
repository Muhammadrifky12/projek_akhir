@extends('layout.admin')
@section('title' , 'Siswa')
@section('content-title','Daftar Jurusan')
@section('content')

<div class="row">
    <div class="col-xl-3 col-md-5 mb-3">
        <div class="card shadow h-100 py-2"> 
            <div class="card-body ">
                <div class="row no-gutters align-items-center ">
                    <div class="col mr-2 ">
                        <div class="col-mr-2 ">
                             <a href="/viewsiswa"><img src="{{asset ('./template/img/RPL.png')}}" width="270" alt="Rekayasa Perangkat Lunak" class="img-thumbnail"></a>
                            </div>
                            <div class="card-header">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                            Rekayasa Perangkat Lunak</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
@endsection 