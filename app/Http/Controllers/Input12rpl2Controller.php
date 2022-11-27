<?php

namespace App\Http\Controllers;

use App\Models\input12rpl2;
use App\Models\Pelanggaran;
use App\Models\Siswa12rpl2;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PDF;

class Input12rpl2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skor = input12rpl2::all();
        $pela = Pelanggaran::all();
        $siswa = Siswa12rpl2::all();
        return view('Input.Input12rpl2' ,compact('skor','pela','siswa'));
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
        ];
        $this->validate($request,[
            'nama'=>'required',
            'skor'=>'required',
        ], $massage);
        //insert data
        $input = new input12rpl2();
        $input->nama = $request->input('nama');
        $input->skor = $request->input('skor');

        $input->save();
        return redirect('/Input12rpl2');
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
        $siswaku = input12rpl2::find($id);
        $pela = Pelanggaran::all();
        return view('edit.Einput12rpl2' ,compact('siswaku','pela'));
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
        $massage=[
            'required' => ':attribute harus diisi Slurr ',
           'numeric' =>':attribute kudu diisi angka Slur!!!',
           'min' => ':attribute minimal :min karakter ya Slurr',
           'mimes' =>':attribute harus bertipe jpg,jpeg,png',
           'max' => ':attribute maksimal :max Karakter Slurrr'
           ];
           // validasi form
           $this->validate($request,[
           'nama'=>'required',
           'skor'=>'required'
           ], $massage);
         
           $siswa=input12rpl2::find($id);
           $siswa->skor = $siswa->skor + $request->skor;
           $siswa ->save();
           Session::flash('success','Data Berhasil Diinput');
           return redirect('/Input12rpl2');
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
    public function cetakpdf(){
        $data = input12rpl2::all();
        view()->share('data', $data);
        $pdf = 'PDF'::loadview('pdf.Input12rpl2-pdf');
        return $pdf->stream('Pelanggaran 12 RPL 2.pdf');
        // return 'berhasil';
    }
}
