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
    public function searchklasku(Request $request){
        $get = $request->search;
        $data6 = Siswa::where('id_kelas','LIKE','%'.$get.'%')->get();
        $dataa = Siswa::paginate(10);
        $kelas = Kelas::all();
        return view('viewsiswa',compact('data6', 'dataa', 'kelas'));
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
         $massage=[
            'required' => ':attribute harus diisi Slurr ',
            'numeric' =>':attribute kudu diisi angka Slur!!!',
            'min' => ':attribute minimal :min karakter ya Slurr',
            'mimes' =>':attribute harus bertipe jpg,jpeg,png',
            'max' => ':attribute maksimal :max Karakter Slurrr'
        ];
        // validasi form
        $this->validate($request,[
            'nisn'=>'required|numeric',
            'nama'=>'required|min:7|max:50',
            'id_kelas'=>'required',
            'JK'=>'required',
        ],$massage);
        //insert data
        $siswa12 = new Siswa;
        $siswa12->nisn = $request->input('nisn'); 
        $siswa12->nama = $request->input('nama'); 
        $siswa12->id_kelas = $request->input('id_kelas'); 
        $siswa12->JK = $request->input('JK');
        $siswa12->skor = $request->input('skor');
        $siswa12->status = $request->input('status');

        $siswa12->save();
        Session::flash('success','Siswa Berhasil Diinput');
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
        $is = Siswa::find($id);
        $kelas = Kelas::all();
        return view('Edit.Editsiswa',compact('is','kelas'));
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
        $this->validate($request,[
            'nisn'=>'required|numeric',
            'nama'=>'required|min:7|max:50',
            'id_kelas'=>'required',
            'JK'=>'required',
        ]);
        //insert data
        $siswa12 = Siswa::find($id);
        $siswa12->nisn = $request->nisn; 
        $siswa12->nama = $request->nama; 
        $siswa12->id_kelas = $request->id_kelas; 
        $siswa12->JK = $request->JK;
        $siswa12->skor = $request->skor;
        $siswa12->status = $request->status;

        $siswa12->save();
        // Session::flash('success','Data Berhasil Diinput');
        return redirect('/viewsiswa')->with('succes','Data Saved');
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
    public function search(Request $request){
        $get = $request->search;
        $data6 = Siswa::where('nama','LIKE','%'.$get.'%')->get();
        $dataa = Siswa::paginate(7);
        $kelas = Kelas::all();
        return view('viewsiswa',compact('kelas', 'data6', 'dataa'));
    }
}
