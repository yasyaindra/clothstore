<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('dashboard.product.index', ['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('dashboard.product.create', ['categories' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|unique:products',
            'description' => 'required',
            'product_image' => 'image|file|max:2024',
            'category_id' => 'required',
            'price' => 'required',
        ]);

        $product = new Product([
            'name' => $request->name,
            'description' => $request->description,
            'product_image' => $request->file('product_image')->store('assets/img'),
            'category_id' => $request->category_id,
            'price' => $request->price,
        ]);

        $product->save();

        return redirect()->route('product.index')->with('success', 'Product is successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        $categories = Category::all();
        return view("dashboard.product.edit", ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'product_image' => 'image|file|max:2024',
            'price' => 'required',
        ]);

        // dd($request);

        if($request->file('product_image') == null){
            $imageFile = $request->oldImage;
        } else {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $imageFile = $request->file('product_image')->store('assets/img');
        };

        Product::where('id', $product->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'product_image' => $imageFile,
            'price' => $request->price
        ]);

        return redirect()->route('product.index')->with('success', 'Product is successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $delete = Product::findOrFail($product->id);
        $delete->delete();
        return redirect()->route('product.index')->with('success','product deleted successfully');
    }
}
