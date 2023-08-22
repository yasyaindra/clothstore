<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(){
        $transactions = Transaction::all();
        $subtotal = Transaction::sum('total');
        
        // $transactions_name = Transaction::with('product')->get()->pluck('product.*.name');        
        return view('order', ['transactions' => $transactions, 'subtotal' => $subtotal]);
    }

    public function store(Request $request){
        
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required'
        ]);

        $order = new Order([
            "name" => $request->name,
            "phone_number" => $request->phone_number,
            "address" => $request->address,
            "province" => $request->province,
            "city" => $request->city,
            "district" => $request->district
        ]);

        $order->save();

        Transaction::truncate();

        return redirect("/")->with('success', "Checkout sedang diproses!");
    }
}
