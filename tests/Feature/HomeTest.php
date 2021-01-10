<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed();
});

test('it has livewire components set up', function () {
    $this
        ->get('/')
        ->assertSeeLivewire('cart-main-counter')
        ->assertSeeLivewire('home-product-list')
        ->assertSeeLivewire('product-list-item');
});

test('it displays products', function () {
    $this
        ->get('/')
        ->assertSeeInOrder([
            'Playstation 5',
            'Switch',
            'Xbox One',
        ]);
});
