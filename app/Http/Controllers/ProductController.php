<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
  public function index() {
    $products = DB::table('products')->get();
    dd($products);
    return view('products.index');
  }

  public function create() {
    return 'This is the form to create a product from CONTROLLER';
  }

  public function store() {
    //
  }

  public function show($product) {
    // $prodDB = DB::table('products')
    //   ->where('id', '=', $product)
    //   ->get()->first();
    $prodDB = DB::table('products')->find($product);
    dd($prodDB);
    return view('products.show');
  }

  public function edit($product) {
    return "Showing the form to edit the product with id {$product} from CONTROLLER";
  }

  public function update($product) {
    //
  }

  public function destroy($product) {
    //
  }
}
