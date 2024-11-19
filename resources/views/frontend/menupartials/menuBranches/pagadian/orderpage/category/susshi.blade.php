@extends('frontend.menupartials.menuBranches.ozamizmenu')
@section('title', 'Order-Pagadian')

@section('ramenCategory')


<h5 class="text-white bg-danger rounded-1 py-2 py-lg px-3 fs-1 text-center"><strong>Pagadian Branch</strong></h5>
<div class="container-fluid pb-4 rounded-1 px-0" style="background-color:white;">
    <h5 class="text-white bg-success py-3 px-3 fs-1 text-center mt-0 mt-lg-0"><strong>Sushi</strong></h5>
    <div class="row d-flex justify-content-start align-items-lg-start row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 pt-2 g-3 mx-0">
        @foreach ($sushiProducts  as $product)
            <div class="col">
                <div class="card text-center mt-1 d-flex flex-column">
                    <img src="{{ asset('uploads/' . $product->photo) }}" 
                         class="card-img-top img-fluid" 
                         alt="{{ $product->name }}" 
                         style="object-fit: cover; max-height: 100%; width: 100%; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-0 mb-lg-3">
                            <h5 class="card-title text-start text-dark" style="font-size: calc(0.6rem + 0.8vw);">{{ $product->name }}</h5>
                            <p class="fs-5 text-dark text-start"><strong  style="font-size: calc(0.9rem + 0.8vw);">₱{{ $product->price }}</strong></p>
                        </div>
                        <div>
                            @if(Auth::check())
                                <a href="{{ route('menu.ramen.product', ['name' => $product->name]) }}" class="btn btn-success text-white w-100">
                                    <strong>Order</strong>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success text-white w-100">
                                    <strong>Order</strong>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
