<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $kelas = Kelas::paginate(10);
        return view('Kelas',compact('kelas'));
    }

    public function store(Request $request)
    {
        $massage=[
            'required' => ':attribute harus diisi Slurr ',
            'min' => ':attribute minimal :min karakter ya Slurr',
            'max' => ':attribute maksimal :max Karakter Slurrr'
        ];
        $this->validate($request,[
            'kelas'=>'required|',
            'walas'=>'required|min:7|max:50',
        ], $massage);
        //insert data
        $kelass = new kelas;
        $kelass->kelas = $request->input('kelas'); 
        $kelass->walas = $request->input('walas'); 

        $kelass->save();
        Session::flash('success','Data Berhasil Diinput');
        return redirect('/Kelas')->with('succes','Data Saved');
    }
    
    public function search(Request $request,$id){
        
        
    }
}
