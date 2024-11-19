<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartIcon extends Component
{
    public function render()
    {
        

        return view('livewire.cart-icon');
    }
}
