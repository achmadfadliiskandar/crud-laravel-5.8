<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.index', compact('pertanyaan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
            'email' => 'required',
            'izin' => 'required',
            'soal' => 'required'
    	]);
 
        pertanyaan::create([
    		'nama' => $request->nama,
            'email' => $request->email,
            'izin' => $request->izin,
            'soal' => $request->soal
    	]);
 
    	return redirect('/pertanyaan')->with('status','pertanyaan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.show', compact('pertanyaan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'izin' => 'required',
            'soal' => 'required'
        ]);

        $table_pertanyaan = pertanyaan::find($id);
        $table_pertanyaan->nama = $request->nama;
        $table_pertanyaan->email = $request->email;
        $table_pertanyaan->izin = $request->izin;
        $table_pertanyaan->soal = $request->soal;
        $table_pertanyaan->update();
        return redirect('/pertanyaan')->with('status','pertanyaan berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect('/pertanyaan')->with('status','pertanyaan berhasil di Hapus');
    }
}
