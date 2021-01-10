<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class HomeProductList extends Component
{
    public Collection $products;

    public function mount()
    {
        $this->products = Product::query()->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.home-product-list');
    }
}
