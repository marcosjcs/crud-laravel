@extends('layout')

@section('content')
<h1>Add Restaurant</h1>
<div class="col-sm-6">
  <form method="post" action="">
    @csrf
    <div class="form-group">
      <label>Nome</label>
      <input type="text" name="name" class="form-control" placeholder="Nome">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Endereço</label>
      <input type="text" name="address" class="form-control" placeholder="Endereço">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>    
  </form>
</div>
@endsection