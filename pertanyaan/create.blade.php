@extends('layout.start')

@section('title','Tambah Pertanyaan')
@section('container')
<div class="container">
    <h1 class="text-center">Form Tambah Pertanyaan</h1>
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
          <div class="invalid-feedback">
            wajib isi nama
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
          <div class="invalid-feedback">
            wajib isi email
          </div>
        </div>
        <div class="form-group">
            <label for="izin">Izin</label>
            <input type="text" class="form-control @error('izin') is-invalid @enderror" id="izin" name="izin" value="{{old('izin')}}">
            <div class="invalid-feedback">
              wajib memberikan izin untuk bertanya
            </div>
          </div>
          <div class="form-group">
            <label for="soal">Soal</label>
            <input type="text" class="form-control @error('soal') is-invalid @enderror" id="soal" name="soal" value="{{old('soal')}}">
            <div class="invalid-feedback">
              wajib memberikan isi pertanyaan
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Tambah Pertanyaan">
      </form>
    </div>
@endsection