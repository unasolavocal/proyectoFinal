@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{!! asset('css/productsAdmin.css') !!}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
<br>  <h1 class="text-center">Lista de Productos</h1>
<hr>


<div class="row">
  @foreach($products as $product)
  <div class="col-md-3">
  	<figure class="card card-product">
		<div class="img-wrap">
			<img src="{{Storage::url($product->image)}}" class="card-img-top-dimension">
			<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#">{{$product->brand}}</a></h6>
      <h6 class="title text-dots"><a href="#">{{$product->product_name}}</a></h6>
			<div class="action-wrap">
				<a href="#" class="btn btn-primary btn-sm float-right"> Ordenar </a>
				<div class="price-wrap h5">
					<span class="price-new">{{$product->price_unit}}</span>
					<del class="price-old">$1980</del>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div>
<!--container end-->
@endsection
