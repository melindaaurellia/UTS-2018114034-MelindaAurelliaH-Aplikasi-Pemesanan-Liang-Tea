@extends('layouts.app')

@section('title', 'Data')
@section('content')
<a href="/data/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Data</a>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Description</th>
      <th scope="col">Harga</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $d)
    <tr>
    <td><a href="/data/{{$d->id}}">{{$d->name}}</td>
    <td>{!!$d->description !!}</td>
    <td>{!!$d->harga !!}</td>
    <td><a href="/data/{{$d->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/data/{{ $d->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $data -> links() }}
    </div>
@endsection