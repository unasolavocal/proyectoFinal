<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class crearProductoController extends Controller
{

  public function crear(Request $req){

    $productoNuevo = new Product();
    $productoNuevo->brand = $req['brand'];
    $productoNuevo->product_name = $req['product_name'];
    $productoNuevo->price_unit = $req['price_unit'];
    $productoNuevo->image = $req['image'];

    $productoNuevo->save();

    return redirect('/home');

  }



}
