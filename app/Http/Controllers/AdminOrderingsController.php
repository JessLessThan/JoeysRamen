<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Start with the base query
        $query = Order::query();
    
        // Apply location filter if provided (Ozamiz/Pagadian)
        if ($request->has('form_location') && $request->form_location) {
            $query->where('form_location', $request->form_location);
        }
    
        // Apply order type filter if provided (Delivery/Pickup)
        if ($request->has('order_type') && $request->order_type) {
            $query->where('order_type', $request->order_type);
        }
    
        // Apply customer name search if provided
        if ($request->has('search_customer') && $request->search_customer) {
            $query->where('customer_name', 'like', '%' . $request->search_customer . '%');
        }
    
        // Apply date filter, default to today if not provided
        $filterDate = $request->get('filter_date', now()->toDateString());
        $query->whereDate('order_date', $filterDate);
    
        // Paginate the results
        $orderings = $query->paginate(10);
    
        // Pass the filtered orders data to the view
        return view('admin.content.ozamiz.orders.orders', [
            'sidebar' => view('admin.layouts.partials.sidebar'),
            'orderings' => $orderings,
            'search_customer' => $request->search_customer,
            'order_type' => $request->order_type,
            'form_location' => $request->form_location,
            'filter_date' => $filterDate, // Include the date filter in the view data
        ]);
    }
    

    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('admin.content.ozamiz.orders.show', [
            'sidebar' => view('admin.layouts.partials.sidebar'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin.content.ozamiz.orders.edit', [
            'sidebar' => view('admin.layouts.partials.sidebar'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
