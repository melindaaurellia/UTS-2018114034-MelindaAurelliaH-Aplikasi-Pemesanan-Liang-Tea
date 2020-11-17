@extends('layouts.app')

@section('title', 'Drinkss')
@section('content')
    <h3>Nama Minuman : {{ $drink['nama'] }}</h3>
    <h3>Size Minuman : {{ $drink['size'] }}</h3>
@endsection
   