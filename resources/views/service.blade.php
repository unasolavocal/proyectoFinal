@extends('layouts.app')

@section('content')


<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Servicios</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

<div class="container">
  <ul>
    <div class="card-deck">
      @foreach($service as $servic)
        <li>
          <div class="card">
            <img src="{{ Storage::url($servic->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$servic->service_name}}</h5>
            <h6 class="card-title">{{$servic->address}}</h6>
            <p class="card-text">{{$servic->contact_phone}}</p>
            <label rows="4" cols="50"> {{$servic->services_description}}</label>
        </div>
        <div class="card-footer">
          <small class="text-muted">Contactate para conocer más sobre el servicio</small>
        </div>
      </li>
    @endforeach
  </ul>
</div>



@endsection
