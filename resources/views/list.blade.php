@extends('layout')

@section('content')
<h1>List Page</h1>
@if (Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
    <td>
      <a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
      <a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection