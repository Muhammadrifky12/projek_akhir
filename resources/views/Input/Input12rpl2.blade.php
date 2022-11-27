@extends('layout.admin')
@section('title', 'Input')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-1">
                    <a href="/cetakpdf" class="btn-lg btn-circle btn-danger" data-toggle="tooltip" data-placement="top" title="Download pdf"><i class="fas fa-file-pdf"></i></a>
                </div>
            </div>
            <hr>
            <div class="card shadow">
                <div class="card-header" id="p">
                    <div class="row">
                        <div class="col-lg-2">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kelas 10 RPL
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/Input10rpl1">10 RPL 1</a>
                                <a class="dropdown-item" href="/Input10rpl2">10 RPL 2</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kelas 11 RPL
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/Input11rpl1">11 RPL 1</a>
                                <a class="dropdown-item" href="/Input11rpl2">11 RPL 2</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="k"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kelas 12 RPL
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/Input12rpl1">12 RPL 1</a>
                                <a class="dropdown-item" href="/Input12rpl2">12 RPL 2</a>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tamm">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- perulangan --}}
                            @foreach ($skor as $b => $items)
                                <tr>
                                    <th scope="row">{{ ++$b }}</th>
                                    <td>{{ $items->nama }}</td>
                                    <td>{{ $items->skor }}</td>
                                    <td><a href="" class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                        <a href="{{ route('Input12rpl2.edit', $items->id) }}" class="btn-sm btn-circle"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="card-footer d-flex justify-content-end">
                                {{ $dataa->links() }}
                            </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tamm" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('Input12rpl2.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Siswa</label>
                            <select name="nama" id="nama" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="skor">Pelanggaran siswa</label>
                            <select name="skor" id="skor" class="form-control">
                                <option value="">--PILIH--</option>
                                @foreach ($pela as $item)
                                    <option value="{{ $item->skor }}">{{ $item->Bentukpelanggaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="OKE">
                            <a href="{{ route('Input12rpl2.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        #p {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }

        #k {
            background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%)
        }
    </style>
@endsection
