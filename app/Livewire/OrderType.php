<?php
namespace App\Http\Livewire;

use Livewire\Component;


class OrderType extends Component
{
    public $orderType = 'pickup'; // Default order type
    public $deliveryFee = 0; // Default delivery fee

    public function updatedOrderType($value)
    {
        $this->deliveryFee = ($value == 'delivery') ? 60 : 0;
    }

    public function render()
    {
        return view('livewire.order-type'); // Ensure this matches the view file
    }
}