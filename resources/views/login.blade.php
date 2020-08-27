@extends('layout')

@section('content')
<h1>Login User</h1>
<div class="col-sm-6">
  <form method="post" action="login">
    @csrf
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Senha</label>
      <input type="password" name="password" class="form-control" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>    
  </form>
</div>
@endsection