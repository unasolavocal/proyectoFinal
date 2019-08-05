@extends('layouts.app')

@section('content')
<div class="container">

  <ul>
    <div class="card-deck">
      @foreach($products as $product){
        <li>
          <div class="card">
            <img src="{{asset('storage/$product->product_image')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{LA MARCA}}/h5>
            <p class="card-text">{{$product->product_name}}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </li>
    @endforeach
  </ul>
</div>
@endsection
