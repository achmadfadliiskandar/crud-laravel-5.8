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
    @foreach($pertanyaan as $prt)
    <form action="/pertanyaan/update" method="POST">
        @csrf
        {{-- @method('put') --}}
        <input type="hidden" name="id" value="{{ $prt->id }}">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{$prt->nama}}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="{{$prt->email}}">
        </div>
        <div class="form-group">
            <label for="izin">Izin</label>
            <input type="text" class="form-control" id="izin" name="izin" value="{{$prt->izin}}">
          </div>
          <div class="form-group">
            <label for="soal">Soal</label>
            <input type="text" class="form-control" id="soal" name="soal" value="{{$prt->soal}}">
          </div>
          <input type="submit" class="btn btn-success" value="Edit data">
        </div>
      </form>
      @endforeach
@endsection