@extends('layouts.app')

@section('title', 'Data')
@section('content')
<form action="/data/{{ $d['id'] }}" method='POST'>
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedbzy="emailHelp" value="{{ old('name') ? old('name') : $d['name']}}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{ old('description') ? old('description') : $d['description']}}">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputPassword1" value="{{ old('harga') ? old('harga') : $d['harga']}}">
    @error('harga')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <button type="submit" class="btn btn-outline-secondary">Edit</button>
</form>

@endsection