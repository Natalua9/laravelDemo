@extends('layouts.header')
@section('title', 'Вход')
@section('content')
<form action ="{{route('signin')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">login</label>
    <input type="text" class="form-control"   name="login">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  name="password">
  </div>
  <button type="submit" class="btn btn-primary">Вход</button>
</form>

@endsection