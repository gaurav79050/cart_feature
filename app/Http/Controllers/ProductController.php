<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::orderBy('id', 'asc')->where('quantity' ,'>',0)->paginate(10);
        return view('user/productlist', ['products' => $products]);
    }

    public function addtocart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::find($request->product_id);
        $quantityToAdd = $request->quantity;

        // Get cart from session
        $cart = session()->get('cart', []);
        $currentQty = isset($cart[$product->id]) ? $cart[$product->id]['quantity'] : 0;

        if ($currentQty + $quantityToAdd > $product->quantity) {
            return response()->json(['error' => 'Not enough stock'], 400);
        }

        // Add to cart
        $cart[$product->id] = [
            "name" => $product->product_title,
            "price" => $product->price,
            "quantity" => $currentQty + $quantityToAdd
        ];

        session()->put('cart', $cart);

        return response()->json([
            'cart_count' => count($cart),
            'message' => 'Product added to cart!'
        ]);
    }

    public function viewCart()
    {
        $cart = session('cart', []);
        return view('user/cart', ['products' => $cart]);
       
    }
}
