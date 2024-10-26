<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        // Validate request data
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
                'status' => 'nullable',
            ]);
    
        // Prepare data for insertion
        $productData = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status ? 1 : 0,
        ];
    
        // Handle file upload if a photo is provided
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $filePath = public_path('uploads');
            $file->move($filePath, $file_name);
            $productData['photo'] = $file_name;
        }
    
        // Create and save the product
        Products::create($productData);
    
        // Flash success message and redirect
        Session::flash('success', 'Product added successfully');
        return redirect('/super-admin/products')->with('status', 'Add Done');
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
    // Validate incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'photo' => 'mimes:png,jpeg,jpg|max:2048',
        'status' => 'nullable',
    ]);

    // Update product details
    $productData = [
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'status' => $request->status ? 1 : 0,
    ];

    // Handle file upload if a new photo is provided
    if ($request->hasFile('photo')) {
        // Delete old photo if it exists
        if ($product->photo && file_exists(public_path('uploads/' . $product->photo))) {
            unlink(public_path('uploads/' . $product->photo));
        }

        // Save new photo
        $file = $request->file('photo');
        $file_name = time() . '_' . $file->getClientOriginalName();
        $filePath = public_path('uploads');
        $file->move($filePath, $file_name);
        $productData['photo'] = $file_name;
    }

    // Update product data
    $product->update($productData);

    // Redirect with success message
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
