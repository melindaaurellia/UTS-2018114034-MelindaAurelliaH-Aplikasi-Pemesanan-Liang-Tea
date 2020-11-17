@extends('layouts.app')

@section('title', 'Drinks')
@section('content')
<a href="/drinks/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Minuman</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Minuman</th>
      <th scope="col">Size</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($drinks as $drink)
    <tr>
    <td><a href="/drinks/{{$drink->id}}">{{$drink->nama}}</td>
    <td>{!!$drink->size !!}</td>
    <td><a href="/drinks/{{$drink->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/drinks/{{ $drink->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $drinks -> links() }}
    </div>
@endsection