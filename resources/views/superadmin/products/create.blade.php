@extends('superadmin.layouts.superadmin')

@section('title', 'Product Page')

@section('content')
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Product
                            <a href=" {{ url('super-admin/products')}}" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('super-admin.products.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description"  rows="3" class="form-control"></textarea>
                                @error('description')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="number" name="quantity" class="form-control">
                                @error('quantity')<span class="text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control">
                                @error('price')<span class="text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="me-2">Available</label>
                                <br>
                                <input type="checkbox" name="status" checked style="width: 25px; height: 25px;">
                                @error('status')<span class="text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="mb-3">
                               <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                            
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection