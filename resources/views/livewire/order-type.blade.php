<div>
    <form wire:submit.prevent="submitOrder">
        <label>
            <input type="radio" name="order_type" value="pickup" required wire:model="orderType">
            Pick Up
        </label>
        <label>
            <input type="radio" name="order_type" value="delivery" required wire:model="orderType">
            Delivery
        </label>

        <p>Delivery Fee: ${{ $deliveryFee }}</p>

        <button type="submit">Submit</button>
    </form>
</div>

