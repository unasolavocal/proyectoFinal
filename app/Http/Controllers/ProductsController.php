<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProductsController extends Controller
{
  public function listado(){
  $products = Product::paginate(20);
  $vac = compact("products");
  return view("listaProducto", ['products'=> $products]);
}

  public function crear(Request $req){

      $this->validate($req, [
      'brand' => ['required', 'string', 'max:255'],
      'product_name' => ['required', 'string','alpha_dash', 'max:255'],
      'price_unit' => ['required','between:0,99.99'],
      'image' => ['required','mimes:jpeg,png,jpg,gif,svg','max:2048'],
    ]);

    $productoNuevo = new Product();
    $productoNuevo->brand = $req['brand'];
    $productoNuevo->product_name = $req['product_name'];
    $productoNuevo->price_unit = $req['price_unit'];
    $productoNuevo->image = $req->file('image')->store('public/products');

    $productoNuevo->save();

    return back()->with('status','Datos cargados correctamente');

  //  return redirect('/crearProducto');

  }

}
