<?php

namespace App\Http\Controllers;

use App\Models\input10rpl1;
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
        $dataa = Siswa::paginate(15);
        return view('Input.Input10rpl1', compact('pela', 'siswa', 'dataa'));
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
        return view('Input.Edit10rpl1', compact('siswaku', 'pela'));
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

        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->JK = $request->JK;
        $siswa->skor = $siswa->skor + $request->skor;
        $siswa->save();
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
    public function showEmployees()
    {
        $dataa = input10rpl1::all();
        return view('pdf.input12rpl2', compact('dataa'));
    }

    public function createPDF()
    {
        // retreive all records from db
        $data = input10rpl1::all();
        // share data to view
        view()->share('input10rpl2', $data);
        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
