<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa12rpl2;
use Illuminate\Http\Request;

class Siswa12rpl2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataa = Siswa12rpl2::paginate(10);
        $data6 = Siswa12rpl2::all();
        $kelas = Kelas::all();
        return view('viewsiswa12rpl2',compact('data6','dataa','kelas'));
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
        //     'numeric' =>':attribute kudu diisi angka Slur!!!',
        //     'min' => ':attribute minimal :min karakter ya Slurr',
        //     'mimes' =>':attribute harus bertipe jpg,jpeg,png',
        //     'max' => ':attribute maksimal :max Karakter Slurrr'
        // ];
        // validasi form
        $this->validate($request,[
            'id_kelas'=>'required',
            'nisn'=>'required|numeric',
            'nama'=>'required|min:7|max:50',
            'JK'=>'required',
        ]);
        //insert data
        $siswa122 = new Siswa12rpl2;
        $siswa122->id_kelas = $request->input('id_kelas'); 
        $siswa122->nisn = $request->input('nisn'); 
        $siswa122->nama = $request->input('nama'); 
        $siswa122->JK = $request->input('JK');

        $siswa122->save();
        // Session::flash('success','Data Berhasil Diinput');
        return redirect('/viewsiswa12rpl2')->with('succes','Data Saved');
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
    public function hapus($nama)
    {
        Siswa12rpl2::where('nama',$nama)->delete();
        return redirect('/viewsiswa12rpl2');
    }
}
