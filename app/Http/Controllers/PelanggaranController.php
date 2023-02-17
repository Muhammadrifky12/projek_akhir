<?php

namespace App\Http\Controllers;

use App\Models\jenispelanggaran;
use App\Models\Pelanggaran;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggar = Pelanggaran::all();
        $pela = Pelanggaran::paginate(5);
        $jenis = jenispelanggaran::all();
        $jenis = jenispelanggaran::paginate(3);
        return view('Pelanggaran', compact('pelanggar', 'pela', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute harus diisi Slurr ',
            'min' => ':attribute minimal :min karakter ya Slurr',
            'max' => ':attribute maksimal :max Karakter Slurrr'
        ];
        $this->validate($request, [
            'id_jenis' => 'required',
            'Bentukpelanggaran' => 'required|min:7|max:255',
            'skor' => 'required',
        ], $massage);
        //insert data
        $pelangg = new Pelanggaran();
        $pelangg->id_jenis = $request->input('id_jenis');
        $pelangg->Bentukpelanggaran = $request->input('Bentukpelanggaran');
        $pelangg->skor = $request->input('skor');

        $pelangg->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/Pelanggaran')->with('succes', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = jenispelanggaran::all();
        $pel1 = Pelanggaran::find($id);
        return view('Edit.Editpelanggaran', compact('jenis', 'pel1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute harus diisi Slurr ',
            'min' => ':attribute minimal :min karakter ya Slurr',
            'max' => ':attribute maksimal :max Karakter Slurrr'
        ];
        $this->validate($request, [
            'id_jenis' => 'required',
            'Bentukpelanggaran' => 'required|min:7|max:50',
            'skor' => 'required',
        ], $massage);
        $pelaku = Pelanggaran::find($id);
        $pelaku->id_jenis = $request->id_jenis;
        $pelaku->Bentukpelanggaran = $request->Bentukpelanggaran;
        $pelaku->skor = $request->skor;

        $pelaku->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/Pelanggaran')->with('succes', 'Perubahan Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($skor)
    {
        Pelanggaran::where('skor', $skor)->delete();
        return redirect('/Pelanggaran');
    }
}
