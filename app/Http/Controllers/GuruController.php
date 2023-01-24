<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\guru;
use App\Models\gurubk;
use App\Models\gurutatib;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::all();
        $guru = guru::paginate(5);
        $gurubk = gurubk::all();
        $gurubkk = gurubk::paginate(5);
        $tatib = gurutatib::all();
        $tatibb = gurutatib::paginate(5);
        return view('Guru', compact('guru', 'gurubk', 'gurubkk', 'tatib', 'tatibb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nip' => 'required|numeric',
            'nama' => 'required|min:7|max:50',
            'JK' => 'required',
        ], $massage);
        //insert data
        $Guru = new guru;
        $Guru->nip = $request->input('nip');
        $Guru->nama = $request->input('nama');
        $Guru->JK = $request->input('JK');

        $Guru->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/Guru')->with('succes', 'Data Saved');
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
        $Gurukuh = guru::find($id);
        return view('Edit.Editguru',compact('Gurukuh'));
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
        $gurui = guru::find($id);
        $gurui->nip = $request->nip;
        $gurui->nama = $request->nama;
        $gurui->JK = $request->JK;
        $gurui->save();
        return redirect('/Guru');
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
    public function hapus($id)
    {
        guru::where('id', $id)->delete();
        return redirect('/Guru');
    }
}
