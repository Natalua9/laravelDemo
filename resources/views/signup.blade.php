@extends('layouts.header')
@section('title', 'Регистрация')
@section('content')
<form action ="{{route('signup')}}" method="post">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="name" class="form-control"  name="full_name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="phone" class="form-control"  name="phone">
  </div>  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">login</label>
    <input type="login" class="form-control"  name="login">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Регистрация</button>
</form>

@endsection