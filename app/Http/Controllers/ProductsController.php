<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(10);

        return view('superadmin.products.products',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
           'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'status' => 'nullable',

          ]);

          Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status == true ? 1:0,
          ]);

          return redirect('/super-admin/products')->with('status', 'Add Product Doned');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        return view('superadmin.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('superadmin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
             'description' => 'required|string|max:255',
             'price' => 'required|numeric|min:0',
             'quantity' => 'required|integer|min:0',
             'status' => 'nullable',
 
           ]);
 
           $product->update([
             'name' => $request->name,
             'description' => $request->description,
             'price' => $request->price,
             'quantity' => $request->quantity,
             'status' => $request->status == true ? 1:0,
           ]);
 
           return redirect('/super-admin/products')->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect('/super-admin/products')->with('status', 'Product Deleted');
    }
}
