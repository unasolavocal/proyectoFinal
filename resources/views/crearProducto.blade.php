@extends('layouts.app')

@section('content')

<body>

<div class="container">

  <div class="container">
	<div class="row">
  		<div class="col-md-12">
   		<h1>Mundo Mascotas - Crear nuevo producto</h1>
      	</div>
  	</div>



<div class="row">

  <div class="col-md-6">
  <form  action="/crearProducto" role="form" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

  <div class="form-group">
    <label for="brand" class="loginFormElement">Marca del producto</label>
    <input class="form-control" name="brand" value="{{ old('brand') }}" id="productname">
  </div>

 <div class="form-group">
   <label for="productname" class="loginFormElement">Nombre del Producto</label>
   <input class="form-control" name="product_name" value="{{ old('product_name') }}" id="productname">
 </div>

 <div class="form-group">
   <label for="productprice" class="loginFormElement">Precio del producto</label>
   <input class="form-control" name="price_unit" value="{{ old('price_unit') }}" id="productprice">
 </div>


<div class="form-group">

<label class="control-label">Imagen</label>

<input class="filestyle" data-icon="false" name="image" type="file">

</div>


    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Añadir producto</button>

    </div></form>

    </div>

  </body>








  </div>

  <!-- /.container -->

<footer>
  <hr>
    <div class=" container text-right align-bottom">
    <p>Shopping Cart | © Copyright 2016, All Rights Reserved</p>
    </div>
</footer>
</div>
<div id="push">
</div>

</div>


@endsection
