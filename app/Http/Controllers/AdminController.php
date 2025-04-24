<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin/dashboard');
    }

    public function productupload(Request $request)
    {
        $request->validate([
            'product_title' => 'required|string|max:255',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        try {

            $product = new Product;
            $product->product_title = $request->input('product_title');
            $product->price = $request->input('price');
            $product->quantity = $request->input('quantity');
            $product->save();

            return redirect()->route('productupload')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while creating the Product.');
        }
    }


    public function productlist()
    {
        $products = Product::orderBy('id', 'desc')->where('quantity' ,'>',0)->paginate(10);
        return view('admin/productlist', ['products' => $products]);
    }

    public function editproduct(Request $request, $id = 0)
    {
        if ($request->isMethod('put')) {

            $request->validate([
                'product_title' => 'required|string|max:255',
                'price' => 'required',
                'quantity' => 'required'
            ]);

            try {

                $product = Product::find($request->input('product_id'));
                $product->product_title = $request->input('product_title');
                $product->price = $request->input('price');
                $product->quantity = $request->input('quantity');
                $product->save();
                return redirect()->back()->with('success', 'Product Updated successfully.');
            } catch (\Exception $e) {

                return back()->with('error', 'An error occurred while Updating the Product.');
            }
        } else {
            if ($id != 0) {
                $products = Product::where('id', $id)->orderBy('id', 'desc')->paginate(10);
                return view('admin/editproduct', ['products' => $products]);
            }
        }
    }

    public function deleteproduct($id = 0)
    {
        try {
            if ($id != 0) {
                $product = Product::find($id);
                $product->delete();
                return redirect()->route('productlist')->with('success', 'product Deleted successfully.');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'An error occurred while creating the product.');
        }
    }

}
