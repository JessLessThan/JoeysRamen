<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{

    public $cartItems = [];
    public $subtotal;
    public $vat;
    public $discount;
    public $total;


    protected $listeners = [
        'cartUpdated' => 'render',
    ];

    public function mount(){
        $this->cartItems = $this->getCartItems();
         $this->calculateTotals();
     }

     public function calculateTotals()
    {
        $this->subtotal = $this->cartItems->sum(function($item) {
            return $item->quantity * $item->product->price;
        });
        $this->vat = $this->subtotal * 0.1; // 10% VAT example
        $this->discount = 5; // Apply your discount logic here
        $this->total = $this->subtotal + $this->vat - $this->discount;
    }
 
    public function getCartItems()
    {
        return Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();
    }

    public function addToCart($productId)
    {
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += 1; // increment its quantity
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
        //dispatch
        $this->dispatch('cartUpdated');
    }


    public function updateQuantity($cartItemId, $quantity)
    {
        $cartItem = Cart::find($cartItemId);
        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
            $this->dispatch('cartUpdated');
        }
    }

    public function removeItem($cartItemId)
    {
        $cartItem = Cart::find($cartItemId);
        if ($cartItem) {
            $cartItem->delete();
            $this->dispatch('cartUpdated');
        }
    }

    public function render()
    {
        

        $this->cartItems = $this->getCartItems();
        $this->calculateTotals();

        return view('livewire.cart', [
            'cartItems' => $this->cartItems
        ])->title('E-commerce | Shopping cart');
    }
    
}
