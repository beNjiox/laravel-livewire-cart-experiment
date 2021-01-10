<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->create(['name' => 'Playstation 5', 'amount_in_cents' => 49960]);
        Product::factory()->create(['name' => 'Xbox One', 'amount_in_cents' => 42242]);
        Product::factory()->create(['name' => 'Switch', 'amount_in_cents' => 39999]);
    }
}
