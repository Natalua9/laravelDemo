@extends('layouts.header')
@section('title', 'Вход')
@section('content')
Личный кабинет
@foreach ($app as $ap )

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
 
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>

  </div>
</div>
@endforeach
@endsection