<?php

namespace App\Http\Controllers;

use App\Models\pagadianProducts;
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



        public function addToCart($id) {
            // Check if the product is from pagadianProducts or Products
            $product = Products::find($id);
            $pagadianProduct = pagadianProducts::find($id);
        
            // If the product is not found in either model, return an error
            if (!$product && !$pagadianProduct) {
                return redirect()->back()->with('error', 'Product not found!');
            }
        
            // Default to the first product if found
            $productToAdd = $product ?: $pagadianProduct;
        
            // Get current cart from session, or initialize an empty array if it doesn't exist
            $cart = session()->get('cart', []);
            
            // Check if the product is already in the cart
            if (isset($cart[$id])) {
                // If the product exists in the cart, increment the quantity
                $cart[$id]['quantity']++;
            } else {
                // If the product does not exist in the cart, add it
                $cart[$id] = [
                    "product_name" => $productToAdd->name,
                    "photo" => $productToAdd->photo, // Ensure this is correctly populated
                    "price" => $productToAdd->price,
                    "quantity" => 1
                ];
            }
        
            // Save the updated cart back to the session
            session()->put('cart', $cart);
        
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Product added to Cart!');
        }
        
        
        public function carts(){
            return view('frontend.menupartials.menuBranches.chart.chart');
        }

        public function remove(Request $request)
        {
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product successfully removed!');
            }
        }

        public function updateChart(Request $request)
        {
            if($request->id && $request->quantity){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'Cart successfully updated!');
            }
        }

        public function checkout(Request $request)
        {
            

        $cart = $request->input('cart');
        $total = $request->input('total');
        
        // Process checkout logic (e.g., saving order, calculating totals, etc.)
        
        return view('frontend.menupartials.menuBranches.checkout.checkout', compact('cart', 'total'));
        }

    
}
