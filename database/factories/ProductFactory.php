<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => fn() => "Product #" . (Product::count() + 1),
            'amount_in_cents' => 42,
        ];
    }
}
