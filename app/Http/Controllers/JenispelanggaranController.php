<?php

namespace App\Http\Controllers;

use App\Models\jenispelanggaran;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class JenispelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $massage = [
            'required' => ':attribute harus diisi Slurr ',
        ];
        $this->validate($request, [
            'jenisku' => 'required|',
        ], $massage);
        //insert data
        $y = new jenispelanggaran();
        $y->jenisku = $request->input('jenisku');

        $y->save();
        Session::flash('success', 'Data Berhasil Diinput');
        return redirect('/Pelanggaran')->with('succes', 'Data Saved');
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
        $jenis = jenispelanggaran::find($id);
        return view('Edit.Editjenispelanggaran', compact('jenis'));
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
        $r = jenispelanggaran::find($id);
        $r->jenisku = $request->jenisku;
        $r->save();

        return redirect('/Pelanggaran');
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
    public function hapus($id)
    {
        jenispelanggaran::where('id', $id)->delete();
        return redirect('/Pelanggaran');
    }
}
