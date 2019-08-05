<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class crearProductoController extends Controller
{

  public function crear(Request $req){

    $productoNuevo = new Product();
    $productoNuevo->product_name = $req['product_name'];
    $productoNuevo->product_name = $req['brand'];
    $productoNuevo->product_name = $req['price_unit'];
    $productoNuevo->product_name = $req['image'];

    $productoNuevo->save();

    return redirect('/home');

  }



}
