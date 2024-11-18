@extends('layouts.header')
@section('title', 'Добавление заявки')
@section('content')
<div class="container">
<form action ="{{route('addTaskUser')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Название</label>
    <input type="text" class="form-control"   name="service_type">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">адресс</label>
    <input type="text" class="form-control"  name="adress">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">дата</label>
    <input type="date" class="form-control"  name="date_time">
  </div>
  <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>

@endsection