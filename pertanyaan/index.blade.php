@extends('layout.start')

@section('title','Pertanyaan')

@section('container')
<div class="container">
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<a href="/pertanyaan/create" class="btn btn-primary my-3">Tambah</a>
<table class="table table-bordered text-center">
    <thead class="bg-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">izin</th>
        <th scope="col">soal</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($pertanyaan as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->nama}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->izin}}</td>
                <td>{{$value->soal}}</td>
                <td>
                    <a href="/pertanyaan/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/pertanyaan/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
        <div class="alert alert-danger">No Data</div>
        @endforelse              
    </tbody>
  </div>
</table>

@endsection