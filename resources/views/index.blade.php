@extends('layout.start')

@section('title','Pertanyaan')

@section('container')
    <h1 class="text-center">Forum Pertanyaan Sanber</h1>
    <p class="text-center">Silahkan share pertanyaan di sini</p>
    <div class="container text-center">
      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif   
        <a href="/pertanyaan/tambah" class="btn btn-dark my-3">Tambah data</a>
    <table class="table table-bordered">
        <thead class="bg-primary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Izin</th>
            <th scope="col">Soal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pertanyaan as $prt)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$prt->nama}}</td>
              <td>{{$prt->email}}</td>
              <td>{{$prt->izin}}</td>
              <td>{{$prt->soal}}</td>
              <td>
                  <a href="/pertanyaan/edit/{{$prt->id}}" class="btn btn-success">Edit</a>
                  <a href="/pertanyaan/hapus/{{$prt->id}}" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </div>
        @endforeach
      </table>
@endsection