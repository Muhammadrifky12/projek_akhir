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
        $data = Siswa::paginate(7);
        return view('History', compact('history', 'histor', 'pelala', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function tambah($id)
    {
        $siswa = Siswa::find($id);
        $bk = gurubk::all();
        $tatib = gurutatib::all();

        return view('historytambah', compact('siswa', 'bk', 'tatib'));
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
        $history->penanganan = $request->input('penanganan');

        $history->save();
        // Session::flash('success','Data Berhasil Diinput');
        return redirect('/History')->with('succes', 'Data Saved');
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
        $dataku = history::paginate(5);
        return view('Isihistory', compact('historyyku', 'dataku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historykuh = history::find($id);
        $siswaa = Siswa::find($id);
        $bkk = gurubk::all();
        $tatibb = gurutatib::all();
        return view('Edit.Edithistory', compact('siswaa', 'historykuh', 'bkk', 'tatibb'));
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
        $edit = history::find($id);
        $edit->id_siswa = $request->id_siswa;
        $edit->tanggal = $request->tanggal;
        $edit->bentukpelanggaran = $request->bentukpelanggaran;
        $edit->penanganan = $request->penanganan;
        $edit->save();
        return redirect('/History');
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
