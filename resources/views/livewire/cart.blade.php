<x-user-view-layout>
    <section>
        <div class="container mx-auto max-w-3xl">
            <header class="text-center d-flex gap-3">
                <h1 class="text-xl fw-bold text-gray-900">Your Cart</h1>
                <div wire:loading class="spinner-border text-primary" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </header>
            
            <div class="mt-4">
                <ul class="list-unstyled">
                    @foreach($cartItems as $item)
                    <li class="d-flex align-items-center gap-4 mb-4">
                        <img src="{{ Storage::url($item->product->image) }}" alt="" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;" />
                        
                        <div>
                            <h3 class="h6 text-dark">{{ $item->product->name }}</h3>
                            <dl class="text-muted small">
                                <div class="d-inline">
                                    <dt>Size:</dt>
                                    <dd class="d-inline">{{ $item->product->size }}</dd>
                                </div>
                                <div class="d-inline ms-2">
                                    <dt>Color:</dt>
                                    <dd class="d-inline">{{ $item->product->color }}</dd>
                                </div>
                            </dl>
                        </div>
                        
                        <div class="d-flex flex-fill align-items-center justify-content-end gap-2">
                            <form>
                                <label for="Line{{ $item->id }}Qty" class="visually-hidden">Quantity</label>
                                <input type="number" min="1" value="{{ $item->quantity }}" id="Line{{ $item->id }}Qty" wire:change="updateQuantity({{ $item->id }}, $event.target.value)" class="form-control form-control-sm text-center" style="width: 60px;" />
                            </form>

                            <button wire:click="removeItem({{ $item->id }})" class="btn btn-outline-danger p-0">
                                <span class="visually-hidden">Remove item</span>
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <div class="mt-4 border-top pt-4 d-flex justify-content-end">
                    <div class="w-100" style="max-width: 500px;">
                        <dl class="row small text-muted mb-0">
                            <dt class="col">Subtotal</dt>
                            <dd class="col text-end">${{ $subtotal }}</dd>

                            <dt class="col">VAT</dt>
                            <dd class="col text-end">${{ $vat }}</dd>

                            <dt class="col">Discount</dt>
                            <dd class="col text-end">-${{ $discount }}</dd>
                        </dl>
                        <dl class="row fw-bold">
                            <dt class="col">Total</dt>
                            <dd class="col text-end">${{ $total }}</dd>
                        </dl>

                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a class="btn btn-primary" href="/">Continue Shopping</a>
                            <a class="btn btn-secondary" href="#">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-view-layout>
