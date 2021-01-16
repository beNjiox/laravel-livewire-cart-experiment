<tr>
    @if ($editMode === true)
        <td class="border p-2">
            <input type="text" wire:model.lazy="newName" class="p-2 text-sm border border-black-50">
        </td>
        <td class="border p-2">
            <input type="text" wire:model.lazy="newAmount" class="p-2 text-sm border border-black-50">
        </td>
        <td class="border p-2 text-center">
            <button wire:click="cancelEdit()" class="p-2 px-6 border border-2 bg-red-50 text-sm">
                Cancel
            </button>

            <button wire:click="confirmEdit()" class="p-2 px-6 border border-2 bg-green-50 text-sm">
                Confirm
            </button>
        </td>

    @else
        <td class="border p-2">{{ $product->name }}</td>
        <td class="border p-2">{{ $product->amount_in_cents }}</td>
        <td class="border p-2 text-center">
            <button wire:click="$set('editMode', true)" class="p-2 px-6 border border-2 bg-blue-50 text-sm">Edit
            </button>
        </td>
    @endif
</tr>
