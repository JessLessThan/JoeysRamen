<?php

namespace App\Http\Controllers;

use App\Models\pagadianProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagadianProductsController extends Controller
{
    /**
     * Display a listing of the resource with optional category filter.
     */
    public function index(Request $request)
    {
        // Check for category filter in request
        $category = $request->input('category');

        // Filter products by category if specified, otherwise return all
        $pagadianproducts = pagadianProducts::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })->paginate(10);

        return view('superadmin.products.pagadiandatabase.pagadianproducts', [
            'pagadianproducts' => $pagadianproducts,
            'selectedCategory' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.products.pagadiandatabase.pagadiandbmethods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'photo' => 'mimes:png,jpeg,jpg|max:2048',
            'status' => 'nullable',
        ]);

        $pagadianproductData = [
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'status' => $request->status ? 1 : 0,
        ];

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $filePath = public_path('uploads');
            $file->move($filePath, $file_name);
            $pagadianproductData['photo'] = $file_name;
        }

        pagadianProducts::create($pagadianproductData);

        return redirect('/super-admin/pagadianproducts')->with('status', 'Product added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pagadianProducts $pagadianproduct)
    {
        return view('superadmin.products.pagadiandatabase.pagadiandbmethods.edit', compact('pagadianproduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pagadianProducts $pagadianproduct)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'photo' => 'mimes:png,jpeg,jpg|max:2048',
            'status' => 'nullable',
        ]);

        $pagadianproductData = [
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'status' => $request->status ? 1 : 0,
        ];

        if ($request->hasFile('photo')) {
            if ($pagadianproduct->photo && file_exists(public_path('uploads/' . $pagadianproduct->photo))) {
                unlink(public_path('uploads/' . $pagadianproduct->photo));
            }

            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $filePath = public_path('uploads');
            $file->move($filePath, $file_name);
            $pagadianproductData['photo'] = $file_name;
        }

        $pagadianproduct->update($pagadianproductData);

        return redirect('/super-admin/pagadianproducts')->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pagadianProducts $pagadianproduct)
    {
        if ($pagadianproduct->photo && file_exists(public_path('uploads/' . $pagadianproduct->photo))) {
            unlink(public_path('uploads/' . $pagadianproduct->photo));
        }

        $pagadianproduct->delete();
        return redirect('/super-admin/pagadianproducts')->with('status', 'Product Deleted');
    }
}
