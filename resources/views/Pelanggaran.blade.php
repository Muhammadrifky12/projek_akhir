@extends('layout.admin')
@section('title' , 'Pelanggaran')
@section('content-title','Macam-Macam Pelanggaran')
@section('content')
<style>
    #p {
        background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
    }
    </style>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4"> 
            <div class="card-header" id="p">
                <div class="row">
                  <div class="col-lg-2">
                    <a href="/Pelanggaran" data-="tab" class="text-white">Sikap Prilaku</a>
                  </div> 
                  <div class="col-lg-2">     
                      <a href="/Pelanggaran_kerapian" data-="tab" class="text-white">Kerapian</a>
                  </div>
                  <div class="col-lg-6">    
                      <a href="/Pelanggaran_kerajinan" data-="tab" class="text-white">Kerajinan</a>
                  </div> 
                  </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                        <div class="card-body ">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Bentuk Pelanggaran</th>
                                    <th scope="col">Skor Sanksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    {{-- perulangan --}}
                                    @foreach ($data1 as $b => $items)
                                    <tr>
                                      <th scope="row">{{++$b}}</th>
                                      <td>{{$items -> Bentuk_pelanggaran }}</td>
                                      <td>{{$items -> Skor_sanksi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                             <div class="card-footer d-flex justify-content-end">
                                {{ $dataa->links() }}
                             </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>
</div>
</div>
@endsection 