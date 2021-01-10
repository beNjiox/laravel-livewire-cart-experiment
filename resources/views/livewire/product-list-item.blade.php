<div class="flex w-full justify-between p-2 xl:w-1/2 xl:justify-start">
    <div class="w-1/2">
        <div class="text-2xl">{{ $product->name }}</div>
        <div class="mt-5 font-light">${{ number_format($product->amount_in_cents / 100, 2) }}</div>
        <div class="text-sm text-muted">Quantity : {{ $quantityInCart }}</div>
    </div>
    <div class="ml-6 flex items-center">
        <button class="bg-blue-100 p-2 hover:bg-blue-300" wire:click="addToCart">
            +
        </button>
        <button
            class="bg-red-100 p-2 hover:bg-red-300 ml-3 @if ($quantityInCart ===0) cursor-not-allowed @endif"
            @if ($quantityInCart ===0) disabled @endif
            wire:click="removeFromCart">
            -
        </button>
    </div>
</div>
