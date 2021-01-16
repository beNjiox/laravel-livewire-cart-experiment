<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CatalogTableRow extends Component
{
    public Product $product;
    public bool $editMode = false;
    public ?int $newAmount = null;
    public ?string $newName = null;

    public function mount()
    {
        $this->newName = $this->product->name;
        $this->newAmount = $this->product->amount_in_cents;
    }

    public function cancelEdit()
    {
        $this->newAmount = $this->product->amount_in_cents;
        $this->newName = $this->product->name;
        $this->editMode = false;
    }

    public function confirmEdit()
    {
        info("Updating name = $this->newName, amount = $this->newAmount");

        $this->product->update([
            'amount_in_cents' => $this->newAmount ?? $this->product->amount_in_cents,
            'name' => $this->newName ?? $this->product->name,
        ]);

        $this->product->fresh();
        $this->editMode = false;
        $this->emitTo('product-list-item', 'itemUpdated');
    }

    public function render()
    {
        return view('livewire.catalog-table-row');
    }
}
