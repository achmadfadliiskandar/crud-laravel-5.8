@extends('layout.start')

@section('title', 'Detail Pertanyaan')

@section('container')
<div class="alert alert-secondary text-center">Silahkan melihat Data Anda</div>
<div class="container mt-2">
<div class="card">
    <div class="card-body">
        <h2>Data Pertanyaan</h2>
        <h4>{{$pertanyaan->nama}}</h4>
        <p>{{$pertanyaan->email}}</p> 
        <p>{{$pertanyaan->izin}}</p> 
        <p>{{$pertanyaan->soal}}</p> 
        <a href="/pertanyaan" class="btn btn-warning">Kembali</a>
    </div>
  </div>
</div>
@endsection