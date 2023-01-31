<?php

namespace App\Http\Controllers;

use App\Models\history;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all()->count();
        $histor = history::all()->count();
        $siswaku = Siswa::doesnthave('history')->count();
        $ortu = Siswa::where('skor','>',55)->where('skor','<',149)->get();
        $paginate = Siswa::paginate(5);
        $skorsing = Siswa::where('skor','>',149)->where('skor','<',249)->get();
        $out = Siswa::where('skor','>',249)->get();
        // dd($history);
        return view('dashboard',compact('histor','siswa','siswaku','ortu','skorsing','out','paginate'));
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
        //
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
        $dash = Siswa::find($id);
        return view('Edit.Editpemangilan',compact('dash'));
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

        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->JK = $request->JK;
        $siswa->skor = $request->skor;
        $siswa->status= $request->status;
        $siswa->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/dashboard');
        // return $siswa;
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

    public function export($id){
        $data = Siswa::find($id);
        view()->share('data',$data);
        $pdf = PDF::loadview('pdf.surat');
        // return $pdf->download('Surat Pemanggilan.pdf');
        return $pdf->stream();
    }
}
