<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products = Product::all()->take(4);
        $categories = Category::all()->take(4);
        $transactions = Transaction::all();
        $subtotal = Transaction::sum('total');

        return view('home', ['products' => $products, 'categories' => $categories, 'transactions_count' => $transactions->count(), 'transactions' => $transactions, 'subtotal' => $subtotal]);
    }

    public function single_product(Request $request){
        $categories = Category::all()->take(4);
        $product = Product::find($request->id);
        $transactions = Transaction::all();
        $subtotal = Transaction::sum('total');
        return view('product.index', ['product' => $product, 'transactions_count' => $transactions->count(), 'transactions' => $transactions,'subtotal' => $subtotal, 'categories' => $categories]);
    }
}
