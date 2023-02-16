<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\gurubk;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $kelas = Kelas::paginate(10);
        $walas = guru::all();
        $bk = gurubk::all();
        return view('Kelas', compact('kelas', 'walas', 'bk'));
    }

    public function store(Request $request)
    {
        // $massage = [
        //     'required' => ':attribute harus diisi Slurr ',
        //     'min' => ':attribute minimal :min karakter ya Slurr',
        //     'max' => ':attribute maksimal :max Karakter Slurrr'
        // ];
        // $this->validate($request, [
        //     'kelass' => 'required|',
        //     'walas' => 'required|min:7|max:50',
        //     'gurubk' => 'required',
        // ], $massage);
        //insert data
        $kelass = new kelas;
        $kelass->kelass = $request->input('kelass');
        $kelass->walas = $request->input('walas');
        $kelass->gurubk = $request->input('gurubk');

        $kelass->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/Kelas')->with('succes', 'Data Saved');
    }

    public function search(Request $request, $id)
    {
    }

    public function hapus($kelass)
    {
        Kelas::where('kelass', $kelass)->delete();
        return redirect('/Kelas');
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        //
    }
}
