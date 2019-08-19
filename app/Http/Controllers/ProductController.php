<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // return view('products.index', compact('products'));

        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        // dd($users);
        // $products = Product::all();
        return view('products.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'barcode' => 'required|numeric',
            'description' => 'required',
            'user' => 'required',
        ]);
        
        // dd($request->all());
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'barcode' => $request->barcode,
            'description' => $request->description,
            'user' => $request->user,
        ]);
        return redirect('products')->with('success', 'Product Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $users = User::all();
        // dd($product);
        return view('products.edit', compact('product', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Product::update([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'barcode' => $request->barcode,
        //     'description' => $request->description,
        // ]);

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'barcode' => 'required|numeric',
            'description' => 'required',
            'user' => 'required',
        ]);

        $product =  Product::find($product->id);
        // dd($product);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->barcode = $request->barcode;
        $product->description = $request->description;
        $product->user = $request->user;
        $product->save();

        return redirect('products')->with('success', 'Product Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('danger', 'Product Deleted Successfully.');
    }
}
