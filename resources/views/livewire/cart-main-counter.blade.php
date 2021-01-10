<div>
    <div>Produits dans le panier : {{ $cartItemsCount }}</div>
    @if ($cartItemsCount > 0)
        <button
            onclick="confirm('Vous êtes sur le point de vider le panier ({{ $cartItemsCount }} quantités). Êtes vous sur ?') || event.stopImmediatePropagation()"
            class="bg-red-100 px-4 py-2 mt-2 border-b-2 border-red-500"
            wire:click="clearCart"
        >
            Vider le panier
        </button>
    @endif
</div>
