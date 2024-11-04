<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource with optional category filter.
     */
    public function index(Request $request)
    {
        // Check for category filter in request
        $category = $request->input('category');

        // Filter products by category if specified, otherwise return all
        $products = Products::when($category, function ($query, $category) {
            return $query->where('description', $category);
        })->paginate(10);

        return view('superadmin.products.products', [
            'products' => $products,
            'selectedCategory' => $category
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
            'photo' => 'mimes:png,jpeg,jpg|max:2048',
            'status' => 'nullable',
        ]);

        $productData = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status ? 1 : 0,
        ];

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $filePath = public_path('uploads');
            $file->move($filePath, $file_name);
            $productData['photo'] = $file_name;
        }

        Products::create($productData);

        return redirect('/super-admin/products')->with('status', 'Product added successfully');
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
            'photo' => 'mimes:png,jpeg,jpg|max:2048',
            'status' => 'nullable',
        ]);

        $productData = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status ? 1 : 0,
        ];

        if ($request->hasFile('photo')) {
            if ($product->photo && file_exists(public_path('uploads/' . $product->photo))) {
                unlink(public_path('uploads/' . $product->photo));
            }

            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $filePath = public_path('uploads');
            $file->move($filePath, $file_name);
            $productData['photo'] = $file_name;
        }

        $product->update($productData);

        return redirect('/super-admin/products')->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        if ($product->photo && file_exists(public_path('uploads/' . $product->photo))) {
            unlink(public_path('uploads/' . $product->photo));
        }

        $product->delete();
        return redirect('/super-admin/products')->with('status', 'Product Deleted');
    }
}
