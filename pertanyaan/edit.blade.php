@extends('layout.start')

@section('title','Edit data')

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
    <h1 class="text-center">Form Edit data</h1>
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{$pertanyaan->nama}}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="{{$pertanyaan->email}}">
        </div>
        <div class="form-group">
            <label for="izin">Izin</label>
            <input type="text" class="form-control" id="izin" name="izin" value="{{$pertanyaan->izin}}">
          </div>
          <div class="form-group">
            <label for="soal">Soal</label>
            <input type="text" class="form-control" id="soal" name="soal" value="{{$pertanyaan->soal}}">
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>
@endsection