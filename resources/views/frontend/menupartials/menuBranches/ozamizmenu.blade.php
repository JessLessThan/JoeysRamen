@extends('frontend.menu')
@section('title', 'Order-Ozamiz')
@section('content')
<div id="ozamizMenu" class="col-12 menu rounded-2">
    <div class="menu-header mt-3 rounded-1">
        
    </div>
   
       @yield('ramenCategory')
    
</div>

<script>
    function decreaseQuantity() {
        let quantityElement = document.getElementById('quantity');
        let quantity = parseInt(quantityElement.textContent);
        if (quantity > 0) {
            quantityElement.textContent = quantity - 1;
        }
    }

    function increaseQuantity() {
        let quantityElement = document.getElementById('quantity');
        let quantity = parseInt(quantityElement.textContent);
        quantityElement.textContent = quantity + 1;
    }
</script>
@endsection
