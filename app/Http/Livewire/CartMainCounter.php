<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Log;

class CartMainCounter extends Component
{
    public int $cartItemsCount = 0;

    protected $listeners = [
        'ProductAddedToCart' => 'productQuantityUpdated'
    ];

    public function productQuantityUpdated(int $quantity)
    {
        $this->cartItemsCount += $quantity;
    }

    public function clearCart()
    {
        if ($this->cartItemsCount === 0) {
            return ;
        }

        Log::info("CartMainCounter :: clearCart");
        $this->emit('clearCart');
    }

    public function render()
    {
        return view('livewire.cart-main-counter');
    }
}
