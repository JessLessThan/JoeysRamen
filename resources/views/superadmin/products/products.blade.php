@extends('superadmin.layouts.superadmin')

@section('title', 'Product Page')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="mb-4">Ozamiz Products</h1> 
            <select class="form-select me-2 mb-3" style="max-width: 200px;">
                <option disabled selected>Filter by Category</option>
                <option value="1">Ramen</option>
                <option value="2">Sushi</option>
                <option value="3">Sasshami</option>
                <option value="4">Desserts</option>
                <option value="4">Drinks</option>
            </select>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Products</h3>
                    <div class="d-flex">
                        <a href="{{ url('super-admin/products/create') }}" class="btn btn-primary">Add Product</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product_ID</th>
                                    <th scope="col">Product_Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <div class="showPhoto">
                                                <div>
                                                    @if($product->photo)
                                                        <img src="{{ asset('uploads/' . $product->photo) }}" alt="{{ $product->name }}" class="img-fluid" style="max-width: 80px; height: auto;">
                                                    @else
                                                        <p>No image available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $product->status == 1 ? 'Available' : 'Unavailable' }}</td>
                                        <td>
                                            <a href="{{ route('super-admin.products.edit', $product->id) }}" class="btn btn-success d-inline btn-sm mb-1">Edit</a>
                                            <form action="{{ route('super-admin.products.destroy', $product->id) }}" method="POST" class="d-inline"> 
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm d-inline">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
