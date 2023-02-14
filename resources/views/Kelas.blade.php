@extends('layout.admin')
@section('title', 'Kelas')
@section('content-title','Master Kelas')
@section('content')
    <style>
        #p {
            background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
        }
    </style>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header" id="p">
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah">
                                Tambah Kelas
                            </button>
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
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Walas</th>
                                            <th scope="col">Guru BK</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- perulangan --}}
                                        @foreach ($kelas as $b => $items)
                                            <tr>
                                                <th scope="row">{{ ++$b }}</th>
                                                <td>{{ $items->kelass }}</td>
                                                <td>{{ $items->kelasss->nama }}</td>
                                                <td>{{ $items->bk->nama }}</td>
                                                <td><a href="{{ route('Kelas.hapus', $items->kelass) }}"
                                                        class="btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                                    <a href="" class="btn-sm btn-circle"><i
                                                            class="fas fa-edit"></i></a>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer d-flex justify-content-end">
                                    {{ $kelas->links() }}
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

    <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul type="circle">
                                @foreach ($errors->all() as $item)
                                    <li>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('Kelas.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="kelass">Kelas</label>
                                <input type="text" class="form-control" id="kelass" name='kelass'>
                            </div>
                            <div class="form-group">
                                <label for="walas">Nama Guru</label>
                                <select name="walas" id="walas" class="form-control">
                                    <option value="">--PILIH--</option>
                                    @foreach ($walas as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="BK">Guru BK</label>
                                <select name="gurubk" id="gurubk" class="form-control form-control-sm">
                                    <option value="">--PILIH--</option>
                                    @foreach ($bk as $items1)
                                        <option value="{{ $items1->nama }}">{{ $items1->gurubk->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-success">
                            <a href="{{ route('Kelas.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
