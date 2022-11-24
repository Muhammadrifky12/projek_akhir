@extends('layout.admin')
@section('title', 'History Pelanggaran')
@section('content-title', '12 RPL 2')
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
                        <div class="col-lg-3">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Silahkan Pilih Kelas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/viewsiswa">10 RPL 1</a>
                                <a class="dropdown-item" href="/viewsiswa10rpl2">10 RPL 2</a>
                                <a class="dropdown-item" href="/viewsiswa10rpl2">11 RPL 1</a>
                                <a class="dropdown-item" href="/viewsiswa10rpl2">11 RPL 2</a>
                                <a class="dropdown-item" href="/viewsiswa10rpl2">12 RPL 1</a>
                                <a class="dropdown-item" href="/History12rpl2">12 RPL 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tr>
                            @foreach ($dd as $b => $items)
                        <tr>
                            <th scope="row">{{ ++$b }}</th>
                            <td>{{ $items->id_kelas }}</td>
                            <td>{{ $items->nama }}</td>
                            <td><a onclick=")" class="btn-sm"><i
                                        class="fas fa-folder-open"></i></a>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-yin-yang"></i>Project siswa</h6>
                </div>
                <div id="his" class="card-body">
                    <h6 class="text-center">Pilih Siswa terlebih dahulu</h6>
                </div>
            </div>
        </div>
    </div>
    <script>
        function show(id) {
            $.get('History12rpl2/' + id, function(data) {
                $('#his').html(data);
            })
        }
    </script>
@endsection
