@extends('layouts.app')

@section('title', 'Transaksi')
@section('content')
<a href="/trans/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Transaksi</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Minuman</th>
      <th scope="col">Size</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($trans as $t)
    <tr>
    <td>{{$t->name}}</td>
    <td>{!!$t->minuman !!}</td>
    <td>{!!$t->ukuran !!}</td>
    <td>{!!$t->jmlh !!}</td>
    <td>{!!$t->price !!}</td>
    <td><a href="/trans/{{$t->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/trans/{{$t->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $trans -> links() }}
    </div>
@endsection