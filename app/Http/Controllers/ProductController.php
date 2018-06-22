<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->get();
        return view('product', compact('products'));
    }

    public function saveProduct(Request $request) {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('list');

    }

    public function showProduct() {
        return view('show_product');
    }
    
}
