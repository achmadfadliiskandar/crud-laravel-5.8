<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();

        return view('index',['pertanyaan' => $pertanyaan]);
    }
    public function tambah()
{
	return view('tambah');
 
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'email' => 'email',
        'izin' => 'required',
        'soal' => 'required',
    ]);

	DB::table('pertanyaan')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'izin' => $request->izin,
		'soal' => $request->soal
	]);
	return redirect('/pertanyaan')->with('status','data berhasil di tambah');
 
}
public function edit($id)
{
    $pertanyaan = DB::table('pertanyaan')->where('id',$id)->get();
    
	return view('edit',['pertanyaan' => $pertanyaan]);
 
}
public function update(Request $request)
{
	$validatedData = $request->validate([
        'nama' => 'required',
        'email' => 'email',
        'izin' => 'required',
        'soal' => 'required',
    ]);
	DB::table('pertanyaan')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'email' => $request->email,
		'izin' => $request->izin,
		'soal' => $request->soal
	]);
	return redirect('/pertanyaan')->with('status','data berhasil di edit');
}
public function hapus($id)
{
	DB::table('pertanyaan')->where('id',$id)->delete();
		
	return redirect('/pertanyaan')->with('status','data berhasil di hapus');
}
}
