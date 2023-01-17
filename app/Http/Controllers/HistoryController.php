<?php

namespace App\Http\Controllers;

use App\Models\gurubk;
use App\Models\gurutatib;
use App\Models\history;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histor = Siswa::all();
        $history = history::all();
        $pelala = Pelanggaran::all();
        $bk = gurubk::all();
        $tatib = gurutatib::all();
        return view('History',compact('history','histor','pelala','bk','tatib'));
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
         //insert data
         $history = new history;
         $history->id_siswa = $request->input('id_siswa'); 
         $history->tanggal = $request->input('tanggal'); 
         $history->bentukpelanggaran = $request->input('bentukpelanggaran'); 
         $history->skor = $request->input('skor');
         $history->penanganan = $request->input('penanganan');
 
         $history->save();
         // Session::flash('success','Data Berhasil Diinput');
         return redirect('/History')->with('succes','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historyyku = Siswa::find($id)->history()->get();
        return view('Isihistory',compact('historyyku'));
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
