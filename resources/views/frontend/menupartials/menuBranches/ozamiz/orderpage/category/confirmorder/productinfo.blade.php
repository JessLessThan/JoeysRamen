<x-user-view-layout>
    <div class="container p-5">
        <div class="row bg-white">
    
            <a href="{{ url()->previous() }}" 
                class="text-white fs-4 d-inline-flex p-2 px-3 align-items-center bg-danger text-decoration-none mb-3">
                 <i class="fas fa-arrow-left me-2 text-white"></i> Back
             </a>
             
        

            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div> 
            @endif

            <!-- Left Side: Product Image and Info -->
            <div class="col-lg-3 col-md-4 col-12 p-4">
                <img src="{{ asset('uploads/' . $product->photo) }}" 
                     class="img-fluid rounded" 
                     alt="{{ $product->name }}" 
                     style="width: 100%; max-width: 300px; height: auto; max-height: 300px; object-fit: cover;">
            
                <h2 class="card-title mt-2">{{ $product->name }}</h2>
            
                <div class="d-flex flex-column justify-content-between  mt-2">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <p class="fs-4 text-start text-dark mb-0" id="totalPrice">₱{{ $product->price }}</p>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-secondary">-</button>
                            <input type="number" id="quantity" class="form-control mx-2 text-center" value="1" min="1" style="width: 60px;" readonly>
                            <button class="btn btn-outline-secondary">+</button>
                        </div>
                    </div>
                   
                    @php
                    $cart = session()->get('cart', []);
                @endphp
                
                @php
                // Retrieve the current cart from session
                $cart = session()->get('cart', []);
            
                // Check if the product exists in either Products or pagadianProducts
                $productExistsInCart = isset($cart[$product->id]);
            @endphp
            
            <a class="btn w-100 mt-3 {{ $productExistsInCart ? 'btn-secondary' : 'btn-success' }}" 
               href="{{ $productExistsInCart ? route('cart') : route('add_to_cart', $product->id) }}">
               <strong>{{ $productExistsInCart ? 'Go to Cart' : 'Add to Cart' }}</strong>
            </a>
            
                </div>
            

            </div>
            
            <!-- Right side: Product Details -->
            <div class="col-lg-9 col-md-8 col-12 p-4">
                <div class="border border-dark">
                    <div class="p-3 p-md-5">
                        <!-- Drinks Carousel -->
                        <h4 class="fw-bold mx-2 mt-3">Choose your Drinks</h4>
            
                        <div id="drinkCarousels" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($drinkProducts->chunk(5) as $chunk)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="row"> 
                                            @foreach($chunk as $drink)
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                    <div class="card" style="width: 100%; cursor: pointer;">
                                                        <img src="{{ asset('uploads/' . $drink->photo) }}" 
                                                             class="card-img-top img-fluid" 
                                                             alt="{{ $drink->name }}" 
                                                             style="height: 120px; object-fit: cover;">
                                                    </div>
                                                    <h5 class="card-title mt-2" style="font-size: 14px;">{{ $drink->name }}</h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
            
                            <!-- Carousel controls -->
                            <button class="carousel-control-prev position-absolute" type="button" data-bs-target="#drinkCarousels" data-bs-slide="prev" style="left: -80px;">
                                <span class="carousel-control-prev-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next position-absolute" type="button" data-bs-target="#drinkCarousels" data-bs-slide="next" style="right: -63px;">
                                <span class="carousel-control-next-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            
                        </div>
    
                        <!-- Add-ons Carousel -->
                        <h4 class="fw-bold mx-2 mt-3">Add-ons</h4>
                        <div id="addonCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($drinkProducts->chunk(5) as $chunk)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="row text-center">
                                            @foreach($chunk as $drink)
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                    <div class="card" style="width: 100%; cursor: pointer;">
                                                        <img src="{{ asset('uploads/' . $drink->photo) }}" 
                                                             class="card-img-top img-fluid" 
                                                             alt="{{ $drink->name }}" 
                                                             style="height: 120px; object-fit: cover;">
                                                    </div>
                                                    <h5 class="card-title mt-2 fs-5">{{ $drink->name }}</h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
            
                            <!-- Carousel controls -->
                            <button class="carousel-control-prev position-absolute" type="button" data-bs-target="#addonCarousel" data-bs-slide="prev" style="left: -80px;">
                                <span class="carousel-control-prev-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next position-absolute" type="button" data-bs-target="#addonCarousel" data-bs-slide="next" style="right: -63px;">
                                <span class="carousel-control-next-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</x-user-view-layout>
