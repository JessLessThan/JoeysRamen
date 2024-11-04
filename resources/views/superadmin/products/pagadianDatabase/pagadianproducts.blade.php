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
            <h1 class="mb-4">Pagadian Products</h1>

            <!-- Filter Form -->
            <form method="GET" action="{{ url('super-admin/pagadianproducts') }}">
                <select name="category" class="form-select me-2 mb-3" style="max-width: 200px;" onchange="this.form.submit()">
                    <option disabled selected>Filter by Category</option>
                    <option value="Ramen" {{ request('category') == 'Ramen' ? 'selected' : '' }}>Ramen</option>
                    <option value="Sushi" {{ request('category') == 'Sushi' ? 'selected' : '' }}>Sushi</option>
                    <option value="Sasshimi" {{ request('category') == 'Sasshimi' ? 'selected' : '' }}>Sasshimi</option>
                    <option value="Desserts" {{ request('category') == 'Desserts' ? 'selected' : '' }}>Desserts</option>
                    <option value="Drinks" {{ request('category') == 'Drinks' ? 'selected' : '' }}>Drinks</option>
                </select>
            </form>

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Products</h3>
                    <a href="{{ url('super-admin/pagadianproducts/create') }}" class="btn btn-primary">Add Product</a>
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
                                @foreach ($pagadianproducts as $pagadianproduct)
                                    <tr>
                                        <td>{{ $pagadianproduct->id }}</td>
                                        <td>{{ $pagadianproduct->name }}</td>
                                        <td>{{ $pagadianproduct->category }}</td>
                                        <td>{{ $pagadianproduct->price }}</td>
                                        <td>
                                            <div class="showPhoto">
                                                <div>
                                                    @if($pagadianproduct->photo)
                                                        <img src="{{ asset('uploads/' . $pagadianproduct->photo) }}" alt="{{ $pagadianproduct->name }}" class="img-fluid" style="max-width: 80px; height: auto;">
                                                    @else
                                                        <p>No image available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $pagadianproduct->status == 1 ? 'Available' : 'Unavailable' }}</td>
                                        <td>
                                            <a href="{{ route('super-admin.pagadianproducts.edit', $pagadianproduct->id) }}" class="btn btn-success d-inline btn-sm mb-1">Edit</a>
                                            <form action="{{ route('super-admin.pagadianproducts.destroy', $pagadianproduct->id) }}" method="POST" class="d-inline">
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
                        {{ $pagadianproducts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
