@extends('layout.start')

@section('title','Tambah Pertanyaan')
@section('container')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1 class="text-center">Form Tambah Pertanyaan</h1>
    <form action="/pertanyaan/store" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="izin">Izin</label>
            <input type="text" class="form-control" id="izin" name="izin" value="{{old('izin')}}">
          </div>
          <div class="form-group">
            <label for="soal">Soal</label>
            <input type="text" class="form-control" id="soal" name="soal" value="{{old('soal')}}">
          </div>
          <input type="submit" class="btn btn-primary" value="Tambah Pertanyaan">
      </form>
    </div>
@endsection