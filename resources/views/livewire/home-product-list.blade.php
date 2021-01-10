<div>
    @foreach($products as $product)
        <livewire:product-list-item :product="$product" wire:key="$product->id"/>
    @endforeach
</div>
