{{-- @if ($historyyku->isEmpty())
    <h6 class="text-center">Siswa Belum Melakukan Pelanggaran sama sekali</h6>  
@else --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header" id="pp">
                    <div class="row">
                        <div class="col-lg-3 text-white">Data Siswa</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Bentuk Pelanggaran</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Penanganan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($historyyku as $b => $items)
                            <tr>
                                <th scope="row">{{ ++$b }}</th>
                                <td>{{ $items->tanggal }}</td>
                                <td>{{ $items->bentukpelanggaran }}</td>
                                <td>{{ $items->skor }}</td>
                                <td>{{ $items->penanganan}}</td>
                                <td><a href=""
                                        class="btn btn-circle"><i class="fas fa-trash-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{-- @endif --}}