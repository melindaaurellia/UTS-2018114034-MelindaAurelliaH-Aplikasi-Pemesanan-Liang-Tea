@extends('layouts.app')

@section('title', 'create')
@section('content')
<form action="/drinks" method='POST'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Minuman</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama')}}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Size</label>
    <input type="text" class="form-control" name="size" id="exampleInputPassword1" value="{{ old('size')}}">
    @error('size')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  </div>
  <button type="submit" class="btn btn-outline-secondary">Tambah</button>
</form>

@endsection