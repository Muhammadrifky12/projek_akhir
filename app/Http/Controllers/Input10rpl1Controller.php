<?php

namespace App\Http\Controllers;

use App\Models\gurubk;
use App\Models\gurutatib;
use App\Models\history;
use Carbon\Carbon;
use App\Models\input10rpl1;
use App\Models\Kelas;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Input10rpl1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pela = Pelanggaran::all();
        $siswa = Siswa::all();
        $dataa = Siswa::paginate(7);
        $kelas = Kelas::all();
        return view('Input.Input10rpl1', compact('pela', 'siswa', 'dataa', 'kelas'));
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
        // $massage=[
        //     'required' => ':attribute harus diisi Slurr ',
        // ];
        // $this->validate($request,[
        //     'Nama'=>'required',
        //     'skor'=>'required',
        // ], $massage);
        // //insert data
        // $input = new input10rpl1();
        // $input->Nama = $request->input('Nama');
        // $input->skor = $request->input('skor');

        // $input->save();
        // return redirect('/Input10rpl1');
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
        $siswaku = Siswa::find($id);
        $pela = Pelanggaran::all();
        $bk = gurubk::all();
        $tatib = gurutatib::all();
        $today = Carbon::today();
        return view('Input.Edit10rpl1', compact('siswaku', 'pela','bk','tatib','today'));
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
        // $massage = [
        //     'required' => ':attribute harus diisi Slurr ',
        //     'numeric' => ':attribute kudu diisi angka Slur!!!',
        //     'min' => ':attribute minimal :min karakter ya Slurr',
        //     'mimes' => ':attribute harus bertipe jpg,jpeg,png',
        //     'max' => ':attribute maksimal :max Karakter Slurrr'
        // ];
        // // validasi form
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'Skor' => 'required'
        // ], $massage);
        $pelanggaran = Pelanggaran::find($request->skor);
        $pelanggaran->skor;

        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->JK = $request->JK;
        $siswa->skor = $siswa->skor + $pelanggaran->skor;
        $siswa->save();

        $history = new history();
        $history->id_siswa = $request->input('id_siswa');
        $history->tanggal = $request->input('tanggal');
        $history->bentukpelanggaran = $pelanggaran->Bentukpelanggaran;
        $history->skor = $request->input('skor');
        $history->penanganan = $request->input('penanganan');
        $history->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/Input10rpl1');
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
    public function export($id)
    {
        $tomorrow = Carbon::tomorrow()->format('d-M-Y');
        $kelas = Kelas::find($id);
        $data = Siswa::where('id_kelas', $id)->get();
        view()->share('data', $data);
        view()->share('kelas',$kelas);
        view()->share('tomorrow',$tomorrow);
        $pdf = PDF::loadview('pdf.skor');
        // return $pdf->download('Surat Pemanggilan.pdf');
        return $pdf->stream();
    }
    public function search(Request $request)
    {
        $get = $request->search;
        $siswa = Siswa::where('nama', 'LIKE', '%' . $get . '%')->get();
        $dataa = Siswa::paginate(7);
        $pela = Pelanggaran::all();
        $kelas = Kelas::all();
        return view('Input.Input10rpl1', compact('pela', 'siswa', 'dataa', 'kelas'));
    }
    public function searchklas(Request $request)
    {
        $get = $request->search;
        $siswa = Siswa::where('id_kelas', 'LIKE', '%' . $get . '%')->get();
        $dataa = Siswa::paginate(7);
        $pela = Pelanggaran::all();
        $kelas = Kelas::all();
        return view('Input.Input10rpl1', compact('pela', 'siswa', 'dataa', 'kelas'));
    }
}