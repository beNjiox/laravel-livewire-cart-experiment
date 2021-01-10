<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Log;

class ProductListItem extends Component
{
    public Product $product;
    public int $quantityInCart = 0;

    protected $listeners = ['clearCart' => 'resetQuantity'];

    public function resetQuantity()
    {
        Log::info("ProductListItem :: {$this->product->name} : resetQuantity (Removing $this->quantityInCart quantity)");
        $this->quantityUpdated($this->quantityInCart * -1);
    }

    public function addToCart()
    {
        $this->quantityUpdated();
    }

    public function removeFromCart()
    {
        if ($this->quantityInCart === 0) {
            return ;
        }

        $this->quantityUpdated(-1);
    }

    private function quantityUpdated(int $quantity = 1)
    {
        $this->quantityInCart += $quantity;
        $this->emit('ProductAddedToCart', $quantity);
    }

    public function render()
    {
        return view('livewire.product-list-item');
    }
}
