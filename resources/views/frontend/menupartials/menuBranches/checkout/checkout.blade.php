<x-user-view-layout>
    <div class="container bg-white">
        <div class="row ">
            <div class="col-7 ">
                <div class="card m-3 border-black">
                    <h5 class="px-2 fw-bold pt-2 border-bottom border-black text-light bg-dark pb-2">Contact Details</h5>
                    <form action="{{ route('orders.store') }}" method="POST">
                    <div class="d-flex flex-column justify-content-center align-items-center ">
                        <div class="d-flex flex-row">
                            <div class="mx-3">
                                <h5>Full Name</h5>
                                <input class="form-control px-4" type="text" name="customername" value="{{ Auth::user()->name }}">
                            </div>
                            <div>
                                <h5>Phone Number</h5>
                                <input class="form-control px-4" type="number" name="customerphone" value="{{ Auth::user()->phone }}">
                            </div>    
                        </div>
                        
                        <div class="text-start d-flex flex-row justify-content-between gap-3 my-3">
                            <div>
                                <h4>Order Type</h4>
                                <label>
                                    <input type="radio" name="order_type" value="pickup" id="pickup"> 
                                    Pick Up
                                </label>
                                <label>
                                    <input type="radio" name="order_type" value="delivery" id="delivery"> 
                                    Delivery
                                </label>
                            </div>
                            

                        </div>
                    </div>
                </div>


                <div class="card mt-3 m-3 border-black">
                    <div class="">
                        <h5 class="border-bottom  fw-bold border-black pb-2 py-2 px-2 bg-dark text-light">Deliver</h5>
                        <div class="m-3">

                       
                        <!-- Date Section -->
                        <div class="d-flex flex-column mb-3">
                            <label for="order_date" class="form-label">Select Date</label>
                            <input type="date" name="order_date" id="order_date" 
                                   class="form-control rounded" 
                                   value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                        </div>
                    
                        <!-- Time Section -->
                        <div class="d-flex flex-column mb-3">
                            <label for="order_time" class="form-label">Select Time</label>
                            <input type="time" name="order_time" id="order_time" 
                                   class="form-control rounded" 
                                   value="{{ \Carbon\Carbon::now()->format('H:i') }}">
                        </div>
                    
                        <!-- Delivery Inputs Section -->
                        <div id="deliveryInputs" class="d-flex flex-column mt-3" style="display: none;">
                            <!-- Location Input -->
                            <div class="d-flex flex-column mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" placeholder="Location" name="form_location" 
                                       id="location" 
                                       value="{{ Auth::user()->location }}" 
                                       class="form-control rounded" 
                                       disabled>
                            </div>
                        
                            <!-- Detailed Location Textarea -->
                            <div class="d-flex flex-column mb-3">
                                <label for="detailedlocation" class="form-label">More Location Details</label>
                                <textarea name="form_detailedlocation" id="detailedlocation" 
                                          cols="30" rows="3" 
                                          class="form-control rounded" 
                                          disabled></textarea>
                            </div>
                        </div>

                    </div>
                    </div>
                    
                   
                    
                </div>

                <div class="card mt-3 m-3 border-black">
                    <div class="">
                        <h5 class="border-bottom  fw-bold border-black pb-2 py-2 px-2 bg-dark text-light">Payment Method</h5>
                    <div class="m-3">

                     
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" name="" id="" checked>
                            <label for="" class="ms-2">Cash On Delivery</label>
                        </div>
                        <h5>Confirm your number</h5>
                        <input type="number" value="{{ Auth::user()->phone }}" readonly>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>


            
            <div class="col-5">
                <div class="card mt-3 border-black">
                    <div class="">
                        <h5 class="border-bottom fs-3 fw-bold border-black  py-2 px-2 bg-dark text-light">Checkout Summary</h5>
                    <div class="m-2 ">
                <table class="table">
                    <thead>
                        <tr class="table-success">
                            <th>Quantity</th>
                            <th>Product </th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $grandTotal = 0;
                         $orderItems = []; // Array to hold multiple items
                         @endphp
                        @foreach ($cart as $id => $item)
                                @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $deliveryFee = 0; // Default fee for pickup or no delivery
                            if (isset($_POST['order_type']) && $_POST['order_type'] == 'delivery') {
                                $deliveryFee = 60; // Set delivery fee for delivery orders
                            }
                                $grandTotal += $subtotal;
                                $Total = $deliveryFee + $grandTotal;

                                $CustomerName = Auth::user()->name;
                                $CustomerPhone = Auth::user()->phone;
                                $CustomerLocation = Auth::user()->location;
                                
                                $orderphoto =  $item['photo'];
                                $ordername =   $item['product_name'];
                                $orderprice = $item['price'];
                                $orderquantity = $item['quantity'];


                                $orderItems[] = [
                                'photo' => $orderphoto,
                                'name' => $ordername,
                                'quantity' => $orderquantity,
                                
                            ];

                                
                            @endphp
                    
                            <tr>
                                <td>{{ $item['quantity'] }}x</td>
                                <td hidden>
                                    <img src="{{ asset('images/' . $item['photo']) }}" width="50" height="50" alt="{{ $item['product_name'] }}">
                                </td>
                                <td>{{ $item['product_name'] }}</td>
                                <td>₱{{ $item['price'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex flex-column mt-5">
                    <div class="d-flex flex-row justify-content-between">
                        <h5>Subtotal:</h5>
                        <h5> ₱{{ $grandTotal }}</h5>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <h5>DeliveryFree:</h5>
                        <h5> ₱{{ $deliveryFee ?? 0 }}</h5>
                    </div>

                    <div class="d-flex flex-row justify-content-between pt-2 border-top border-black">
                        <h4 class="fw-bold">Total:</h4>
                        <h4 class="fw-bold"> ₱{{ $Total }}</h4>
                    </div>
                    
                </div>
                <button class="btn btn-success w-100 rounded-5">Place Order</button>
                    </div>
                   {{--
                    <h3>
                        @foreach($orderItems as $item)
                            {{$item['photo']}} - {{ $item['name'] }} - {{ $item['quantity'] }}<br>
                        @endforeach
                    </h3>
                   --}}
                </div>
                

                    @csrf
                    <input type="hidden" name="ordername" value="{{ $ordername }}">
                    <input type="hidden" name="orderphoto" value="{{ $orderphoto }}">
                    <input type="hidden" name="orderQuantity" value="{{$orderquantity}}">
                    <input type="hidden" name="customerlocation" value="{{ $CustomerLocation }}">
                    <input type="hidden" name="ordertotal" value="{{ $Total }}">
                   
                    
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    
                   
                </form>
                
                
                
                
            </div>
        </div>


        
        <script>
            // Set initial values for subtotal and delivery fee
            let subtotal = {{ $grandTotal }};
            let deliveryFee = 0; // Initial delivery fee for pickup
            let total = subtotal + deliveryFee;
        
           
            document.getElementById('pickup').addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('deliveryInputs').style.display = 'none';
            document.getElementById('location').disabled = true;
            document.getElementById('detailedlocation').disabled = true;
        }
    });

    document.getElementById('delivery').addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('deliveryInputs').style.display = 'block';
            document.getElementById('location').disabled = false;
            document.getElementById('detailedlocation').disabled = false;
        }
    });
        
           
        </script>
          
    </div>
</x-user-view-layout>







