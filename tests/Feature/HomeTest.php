<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function() {
   $this->seed();
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
