@extends('layouts.app')

@section('title', 'Groups')
@section('content')
<a href="/groups/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Category</a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">{{$group->nama}}</p>
    <p class="card-text">{!!$group->alamat !!}</p>

    <hr>
    @foreach ($group->trans as $t)
    <li>Minuman : {!!$t->minuman !!}</li>
    <li>Size : {!!$t->ukuran !!}</li>
    <li>Jumlah : {!!$t->jmlh !!}</li>
    <li>Harga : {!!$t->price !!}</li>
  
    @endforeach
    </hr>

    <a href="/groups/{{$group->id}}/edit"> <button class="card-link btn-outline-warning">Edit</button></a>
    <form action="/groups/{{ $group->id}}" method="POST">

    @csrf
    @method('DELETE')
    <button class="card-link btn-outline-danger">Delete</button></td>
  </div>
</div>
    @endforeach
<div>
    {{ $groups -> links() }}
    </div>
@endsection