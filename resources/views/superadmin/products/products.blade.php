@extends('superadmin.layouts.superadmin')

@section('title', 'Product Page')

@section('content')
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                @session('status')
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endsession
                
                <div class="card">
                    <div class="card-header">
                        <h3>Products
                            <a href=" {{ url('super-admin/products/create')}}" class="btn btn-primary float-end">Add Product</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Product_ID</th>
                                <th scope="col">Product_Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->status == 1 ? 'Available': 'Unavailable'}}</td>
                                        <td>
                                            <a href="{{route('super-admin.products.edit', $product->id)}}" class="btn btn-success">Edit</a>
                                            
                                            <form action="{{route('super-admin.products.destroy', $product->id)}}" method="POST" class="d-inline"> 
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>

                          {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection