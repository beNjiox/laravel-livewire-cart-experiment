<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;


beforeEach(function () {
    $this->seed();
});

uses(DatabaseMigrations::class);

it('allows to add remove flush the cart', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('Hello Cart')
            ->assertSee('Playstation 5')
            ->assertSee('Switch')
            ->assertSee('Xbox One')
            ->with('@list-item-playstation-5', function (Browser $scope) {
                $scope
                    ->press('+')
                    ->waitForText("Quantity : 1");
            })
            ->with('@list-item-switch', function (Browser $scope) {
                $scope
                    ->press('+')
                    ->press('+')
                    ->waitForText("Quantity : 2");
            })
            ->with('@list-item-xbox-one', function (Browser $scope) {
                $scope
                    ->press('+')
                    ->press('-')
                    ->press('+')
                    ->waitForText("Quantity : 1");
            })
            ->assertSee('Produits dans le panier : 4')
            ->assertSee('Vider le panier')
            ->press('Vider le panier')
            ->acceptDialog()
            ->waitUntilMissingText('Vider le panier')
            ->assertSee('Produits dans le panier : 0');
    });
});
