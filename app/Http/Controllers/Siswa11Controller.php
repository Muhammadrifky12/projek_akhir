<?php

namespace App\Http\Controllers;
use App\Models\Siswa11;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class Siswa11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataa = Siswa11::paginate(10);
        $data6 = Siswa11::all();
        return view('viewsiswa11',compact('data6','dataa'));
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
            'kelas'=>'required',
        ]);
        //insert data
        $siswa12 = new Siswa11;
        $siswa12->nisn = $request->input('nisn'); 
        $siswa12->nama = $request->input('nama'); 
        $siswa12->kelas = $request->input('kelas'); 

        $siswa12->save();
        // Session::flash('success','Data Berhasil Diinput');
        return redirect('/viewsiswa11')->with('succes','Data Saved');
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
