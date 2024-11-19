<x-user-view-layout>
    <div class="container p-5">
        <div class="row bg-white">
            <!-- Back Button -->
            <a href="{{ url('/menu/ozamiz/ramen')}}" class="text-white fs-4 d-inline-flex p-2 px-3 align-items-center bg-danger text-decoration-none mb-3">
                <i class="fas fa-arrow-left me-2 text-white"></i> Back
            </a>
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div> 
            @endif
            <div>
                <h2 class="fw-bold text-center">My Cart</h2>
            </div>  
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                @php
                                    $total += $details['price'] * $details['quantity'];
                                @endphp
                    
                                <tr data-id="{{ $id }}">
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs">
                                                <img src="{{ asset('images/' . $details['photo']) }}" width="100" height="100" class="img-responsive"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">₱{{ $details['price'] }}</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                                    </td>
                                    <td data-th="Subtotal" class="text-center">₱{{ $details['price'] * $details['quantity'] }}</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                                    </td>
                                </tr>
                            @endforeach      
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total ₱{{ $total }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="{{ route('checkout') }}" method="POST">
                                    @csrf
                                    <a href="{{ route('menu.ramen') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                    
                                    <!-- Pass cart data as hidden inputs -->
                                    @foreach (session('cart') as $id => $details)
                                        <input type="hidden" name="cart[{{ $id }}][product_name]" value="{{ $details['product_name'] }}">
                                        <input type="hidden" name="cart[{{ $id }}][price]" value="{{ $details['price'] }}">
                                        <input type="hidden" name="cart[{{ $id }}][quantity]" value="{{ $details['quantity'] }}">
                                        <input type="hidden" name="cart[{{ $id }}][photo]" value="{{ $details['photo'] }}">
                                    @endforeach
                                    
                                    <input type="hidden" name="total" value="{{ $total }}">
                                    
                                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>                    
            </table>
        </div>
    </div>
<script type="text/javascript">

    $(".cart_update").change(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    
    $(".cart_remove").click(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    
</script>


</x-user-view-layout>







