<div>
    <h2 class="text-4xl mb-4">Cart</h2>

    <div class="space-y-10">
        @foreach($products as $product)
            <livewire:product-list-item :product="$product" wire:key="$product->id"/>
        @endforeach
    </div>
</div>
