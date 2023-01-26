@if ($historyyku->isEmpty())
    <h6 class="text-center">Siswa Belum Melakukan Pelanggaran sama sekali</h6>
@else
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
                                <th scope="col">Jumlah Pelanggaran</th>
                                <th scope="col">Penanganan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($historyyku as $b => $itemw)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $itemw->tanggal }}</td>
                                    <td>{{ $itemw->bentukpelanggaran }}</td>
                                    <td>{{ $itemw->penanganan1->nama }}</td>
                                    <td><a href="{{ route('History.edit', $itemw ->id) }}" class="btn btn-sm btn-primary btn-circle"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class=" d-flex justify-content-end">
                        {{ $dataku->links() }}
                      </div>
                </div>
            </div>
        </div>
    </div>
@endif
