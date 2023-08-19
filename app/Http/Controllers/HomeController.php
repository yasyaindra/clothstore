<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products = Product::all()->take(4);
        $categories = Category::all();
        return view('home', ['products' => $products, 'categories' => $categories]);
    }

    public function single_product(Request $request){

        $product = Product::find($request->id);

        // dd($request->id);
        return view('product.index', ['product' => $product]);
    }
}
