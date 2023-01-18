@extends('layout.admin')
@section('title', 'History pelanggaran')
@section('content-title', 'Data Pelanggaran siswa')
@section('content')
    <style>
        #p {
            background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
        }

        #pp {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }

        #k {
            background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header" id="pp">
                    <div class="row">
                        <div class="col-lg-10 text-white">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-yin-yang"></i>Data Siswa</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nisn</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($histor as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->nisn }}</td>
                                    <td>{{ $items->nama }}</td>
                                    <td>{{ $items->id_kelas }}</td>
                                    <td><a onclick="show({{ $items->id }})" class="btn-sm btn-info"><i
                                                class="fas fa-folder-open"></i></a>
                                                <a href="{{route('History.tambah', $items ->id)}}" class="btn-sm btn-success"><i class="fas fa-plus"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class=" d-flex justify-content-end">
                        {{ $data->links() }}
                      </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header" id="pp">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-yin-yang"></i>History Pelanggaran</h6>
                </div>
                <div id="histor" class="card-body">
                    <h6 class="text-center">Pilih Siswa terlebih dahulu</h6>
                </div>
            </div>
        </div>
    </div>
    <script>
        function show(id){
          $.get('History/'+id,function(data){
            $('#histor').html(data);
          })
        }
      </script>
@endsection
