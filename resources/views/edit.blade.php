@extends('layout')

@section('content')
<h1>Edit Restaurant</h1>
<div class="col-sm-6">
  <form method="post" action="/edit">
    @csrf
    <div class="form-group">
      <input type="hidden" name="id" value="{{$data->id}}">
      <label>Nome</label>
      <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Nome">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" value="{{$data->email}}" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Endereço</label>
      <input type="text" name="address" value="{{$data->address}}" class="form-control" placeholder="Endereço">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>    
  </form>
</div>
@endsection