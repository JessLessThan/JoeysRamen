@extends('superadmin.layouts.superadmin')

@section('title', 'Product Page')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Product
                        <a href="{{ url('super-admin/products')}}" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('super-admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Category</label>
                            <select name="description" class="form-select">
                                <option value="" disabled>Select Category</option>
                                <option value="Ramen" {{ $product->description == 'Ramen' ? 'selected' : '' }}>Ramen</option>
                                <option value="Sushi" {{ $product->description == 'Sushi' ? 'selected' : '' }}>Sushi</option>
                                <option value="Sashimi" {{ $product->description == 'Sashimi' ? 'selected' : '' }}>Sashimi</option>
                                <option value="Desserts" {{ $product->description == 'Desserts' ? 'selected' : '' }}>Desserts</option>
                                <option value="Drinks" {{ $product->description == 'Drinks' ? 'selected' : '' }}>Drinks</option>
                            </select>                            
                            @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                       
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                            @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Upload New Image</label>
                            <input type="file" id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" class="form-control" />
                            @error('photo')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label class="me-2">Available</label>
                            <br>
                            <input type="checkbox" name="status" {{ $product->status == 1 ? 'checked' : '' }} style="width: 25px; height: 25px;">
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
