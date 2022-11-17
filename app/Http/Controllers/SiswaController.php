<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Support\Facades\Session;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataa=Siswa::paginate(10);
        $data6 = Siswa::all();
        $kelas = Kelas::all();
        return view('viewsiswa',compact('data6','dataa','kelas'));
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
         // $massage=[
        //     'required' => ':attribute harus diisi Slurr ',
        //     'numeric' =>':attribute kudu diisi angka Slur!!!',
        //     'min' => ':attribute minimal :min karakter ya Slurr',
        //     'mimes' =>':attribute harus bertipe jpg,jpeg,png',
        //     'max' => ':attribute maksimal :max Karakter Slurrr'
        // ];
        // validasi form
        $this->validate($request,[
            'nisn'=>'required|numeric',
            'nama'=>'required|min:7|max:50',
            'id_kelas'=>'required',
            'JK'=>'required',
        ]);
        //insert data
        $siswa12 = new Siswa;
        $siswa12->nisn = $request->input('nisn'); 
        $siswa12->nama = $request->input('nama'); 
        $siswa12->id_kelas = $request->input('id_kelas'); 
        $siswa12->JK = $request->input('JK');

        $siswa12->save();
        // Session::flash('success','Data Berhasil Diinput');
        return redirect('/viewsiswa')->with('succes','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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
        Siswa::where('nama',$nama)->delete();
        return redirect('/viewsiswa');
    }
}
