<?php

namespace App\Http\Controllers;

use App\Models\pagadianProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PagadianProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagadianproduct = pagadianProducts::paginate(10);

        return view('superadmin.products.pagadiandatabase.pagadianproducts',[
            'pagadianproducts' => $pagadianproduct
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
        // Validate request data
            $request->validate([
                'name' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
                'status' => 'nullable',
            ]);
    
        // Prepare data for insertion
        $pagadianproductData = [
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'status' => $request->status ? 1 : 0,
        ];
    
        // Handle file upload if a photo is provided
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $filePath = public_path('uploads');
            $file->move($filePath, $file_name);
            $pagadianproductData['photo'] = $file_name;
        }
    
        // Create and save the product
        pagadianProducts::create($pagadianproductData);
    
        // Flash success message and redirect
        Session::flash('success', 'Product added successfully');
        return redirect('/super-admin/pagadianproducts')->with('status', 'Add Done');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(pagadianProducts $pagadianproduct)
    {
        //
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
        // Validate incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'photo' => 'mimes:png,jpeg,jpg|max:2048',
        'status' => 'nullable',
    ]);

    // Update product details
    $pagadianproductData = [
        'name' => $request->name,
        'category' => $request->category,
        'price' => $request->price,
        'status' => $request->status ? 1 : 0,
    ];

    // Handle file upload if a new photo is provided
    if ($request->hasFile('photo')) {
        // Delete old photo if it exists
        if ($pagadianproduct->photo && file_exists(public_path('uploads/' . $pagadianproduct->photo))) {
            unlink(public_path('uploads/' . $pagadianproduct->photo));
        }

        // Save new photo
        $file = $request->file('photo');
        $file_name = time() . '_' . $file->getClientOriginalName();
        $filePath = public_path('uploads');
        $file->move($filePath, $file_name);
        $pagadianproductData['photo'] = $file_name;
    }

    // Update product data
    $pagadianproduct->update($pagadianproductData);

    // Redirect with success message
    return redirect('/super-admin/pagadianproducts')->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pagadianProducts $pagadianproduct)
    {
        $pagadianproduct->delete();
        return redirect('/super-admin/pagadianproducts')->with('status', 'Product Deleted');
    }
}
