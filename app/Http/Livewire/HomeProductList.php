<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class HomeProductList extends Component
{
    public $products;

    public function render()
    {
        return view('livewire.home-product-list');
    }
}
