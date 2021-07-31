@extends('layouts.app')

@section('title', 'Groups')
@section('content')
<a href="/groups/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah</a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">{{$group->ket}}</p>

    <hr>
    @foreach ($group->trans as $tran)
    <li>Nama Pelanggan : {!!$tran->name!!}</li>
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