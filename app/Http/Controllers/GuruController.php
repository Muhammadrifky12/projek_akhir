<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\guru;
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
        return view('Guru',compact('guru'));
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
        $massage=[
            'required' => ':attribute harus diisi Slurr ',
            'min' => ':attribute minimal :min karakter ya Slurr',
            'max' => ':attribute maksimal :max Karakter Slurrr'
        ];
        $this->validate($request,[
            'nip'=>'required|',
            'nama'=>'required|min:7|max:50',
            'bidang'=>'required',
            'JK'=>'required',
        ], $massage);
        //insert data
        $Guru = new guru;
        $Guru->nip = $request->input('nip'); 
        $Guru->nama = $request->input('nama');
        $Guru->bidang = $request->input('bidang');
        $Guru->JK = $request->input('JK');

        $Guru->save();
        Session::flash('success','Data Berhasil Diinput');
        return redirect('/Guru')->with('succes','Data Saved');
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
        //
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
        //
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
}
