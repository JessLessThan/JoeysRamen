<x-user-view-layout>
    <div class="container p-5">
        <div class="row bg-white">
            <!-- Back Button -->
            <a href="{{ url()->previous() }}" class="text-white fs-4 d-inline-flex p-2 px-3 align-items-center bg-danger text-decoration-none mb-3">
                <i class="fas fa-arrow-left me-2 text-white"></i> Back
            </a>
    
            <!-- Left Side: Product Image and Info -->
            <div class="col-lg-3 col-md-4 col-12 p-4">
                <img src="{{ asset('uploads/' . $product->photo) }}" 
                     class="img-fluid rounded" 
                     alt="{{ $product->name }}" 
                     style="width: 100%; max-width: 300px; height: auto; max-height: 300px; object-fit: cover;">
            
                <h2 class="card-title mt-2">{{ $product->name }}</h2>
            
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="fs-4 text-dark mb-0" id="totalPrice">₱{{ $product->price }}</p>
                    
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-dark rounded-circle" style="width: 40px; height: 40px;" onclick="decrement()">-</button>
                        <p class="mx-2 mb-0 text-dark" style="font-size: calc(1rem + 0.3vw);" id="counterValue">1</p>
                        <button class="btn btn-outline-dark rounded-circle" style="width: 40px; height: 40px;" onclick="increment()">+</button>
                    </div>
                </div>
            
                <div class="d-flex flex-column mt-2">
                    <div class="me-2">
                        <input type="radio" name="order_type" id="delivery">
                        <label for="delivery">Delivery</label>
                    </div>
            
                    <div>
                        <input type="radio" name="order_type" id="pickup">
                        <label for="pickup">Pick-Up</label>
                    </div>
                </div>
            
                <!-- Optional Order Button -->
                <button class="btn btn-success w-100 mt-3"><strong>Add TO CART</strong></button>
            </div>
            
            <!-- Right side: Product Details -->
            <div class="col-lg-9 col-md-8 col-12 p-4">
                <div class="border border-dark">
                    <div class="p-3 p-md-5">
                        <!-- Drinks Carousel -->
                        <h4 class="fw-bold mx-2 mt-3">Choose your Drinks</h4>
            
                        <div id="drinkCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($drinkProducts->chunk(5) as $chunk)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="row"> 
                                            @foreach($chunk as $drink)
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                    <div class="card" style="width: 100%; cursor: pointer;" onclick="toggleCard(this)">
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#drinkCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#drinkCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
    
                        <!-- Add-ons Carousel -->
                        <h4 class="fw-bold mx-2 mt-3">Add ons</h4>
                        <div id="addonCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($drinkProducts->chunk(5) as $chunk)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="row text-center">
                                            @foreach($chunk as $drink)
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                    <div class="card" style="width: 100%; cursor: pointer;" onclick="toggleCard(this)">
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#addonCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#addonCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-danger rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <script>
        // FUNCTIONALITY
        // Initial counter value
        let count = 1;
        
        // Get the product price from the server
        const productPrice = {{ $product->price }}; // Make sure this is available in your script
        
        // Update the total price display
        function updateTotalPrice() {
            const totalPrice = productPrice * count;
            document.getElementById('totalPrice').innerText = `₱${totalPrice > 0 ? totalPrice : productPrice}`;
        }
        
        // Function to increment the counter
        function increment() {
            count++;
            document.getElementById('counterValue').innerText = count;
            updateTotalPrice(); // Update total price on increment
        }
        
        // Function to decrement the counter
        function decrement() {
            if (count > 1) { // Prevent going below 0
                count--;
                document.getElementById('counterValue').innerText = count;
                updateTotalPrice(); // Update total price on decrement
            }
        }

         // JavaScript function to toggle card selection
    function toggleCard(card) {
        // Check if the card already has a red border
        if (card.style.border === '2px solid red') {
            // If it does, remove the red border
            card.style.border = '';
        } else {
            // Otherwise, set a red border
            card.style.border = '2px solid red';
        }
    }
        </script>
</x-user-view-layout>


