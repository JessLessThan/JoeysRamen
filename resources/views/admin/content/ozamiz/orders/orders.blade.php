@extends('admin.layouts.admin')
@section('title', 'Dashboard')
@section('content')
<h1 class="mt-4">Orders Ozamiz</h1>
<p class="fs-4">Today's Order</p>
<div class="mb-4 d-flex align-items-center justify-content-between">
    
    <div class="mb-3">
        <!-- Date Filter Form -->
        <form method="GET" action="{{ route('admin.orders.index') }}" class="form-inline">
            <div class="d-flex flex-row align-items-center">
                <div class="d-flex flex-column">
                    <div>
                        <label for="search_customer" class="mr-2 d-block">Date:</label>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-group mx-1 ">
                            <input type="date" 
                                   name="filter_date" 
                                   id="filter_date" 
                                   class="form-control" 
                                   value="{{ request('filter_date', now()->toDateString()) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Filter by Date</button>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-dark mx-1 ml-2">Clear</a>
                    </div>
                </div>
                

               
                
            </div> 
        </form>  
    </div>

    <div class="d-flex flex-row">
    
        <div class="mb-3">
            <form method="GET" action="{{ route('admin.orders.index') }}" class="form-inline">
            <!-- Customer Name Search Form -->
                <div class="d-flex flex-row align-items-center">
                    
                    <!-- Order Type Filter -->
                    <div class="d-flex flex-column mr-3">
                        <div>
                            <label for="order_type" class="mr-2 d-block">Order Type:</label>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <!-- Select dropdown with custom styling -->
                            <div class="position-relative">
                                <select name="order_type" id="order_type" class="form-control px-4 text-left" onchange="this.form.submit()">
                                    <option value="">Both</option> <!-- Placeholder aligned left -->
                                    <option value="delivery" {{ request('order_type') === 'delivery' ? 'selected' : '' }}>Delivery</option>
                                    <option value="pickup" {{ request('order_type') === 'pickup' ? 'selected' : '' }}>Pickup</option>
                                </select>
                                <!-- Dropdown icon inside the select box -->
                                <i class="fa fa-caret-down position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Customer Name Search -->
                    <div class="d-flex flex-column">
                        <div>
                            <label for="search_customer" class="mr-2 d-block">Customer Name:</label>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="form-group mx-1">
                                <input type="text" 
                                       name="search_customer" 
                                       id="search_customer" 
                                       class="form-control" 
                                       placeholder="Search by name" 
                                       value="{{ request('search_customer') }}">
                            </div>
                            <button type="submit" class="btn btn-info mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <a href="{{ route('admin.orders.index') }}" class="btn btn-dark ml-2">Clear</a>
                        </div>
                    </div>
                </div>            
            </form>
                   
        </div>
    </div>
    
    
    
    
</div>

<table class="table border border-black">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Date & Time</th>
            <th scope="col">Quantity</th>
            <th scope="col">Order Name</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Order Type</th>
            <th scope="col">Price</th>
            <th scope="col">Phone Number</th>
            <th scope="col">View</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($orderings as $order)
        <tr>
            <td>
                {{ $order->order_date ? \Carbon\Carbon::parse($order->order_date)->format('F j, Y') : 'N/A' }}<br>
                {{ $order->order_time ? \Carbon\Carbon::parse($order->order_time)->format('h:i A') : 'N/A' }}
            </td>
            <td>{{ $order->order_quantity }}x</td>
            <td>{{ $order->order_name }}x</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->order_type }}</td>
            <td>{{ $order->order_total_price }}</td>
            <td>{{ $order->customer_phone }}</td>
            <td>
                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-success">Show Details</a>
            </td>
            <td>button if done or not</td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No orders found for the selected date.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">
    {{ $orderings->links() }}
</div>


<!-- Pagination -->
<div class="d-flex justify-content-center">
   
</div>

  

@endsection