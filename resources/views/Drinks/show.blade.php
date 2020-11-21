@extends('layouts.app')

@section('title', 'Drinkss')
@section('content')
    <h3><img src="{{ url('image') }}/{{$drink['image']}}" width="150" heigh="200"></img></h3>
    <h3>Nama Minuman : {{ $drink['nama'] }}</h3>
    <h3>Size Minuman : {{ $drink['size'] }}</h3>
    
    
@endsection
   