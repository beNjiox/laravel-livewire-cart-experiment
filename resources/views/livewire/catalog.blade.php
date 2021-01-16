<div class="mb-10">
    <h2 class="text-4xl mb-4">Catalog</h2>
    <table class="table-fixed border-collapse w-full">
        <thead>
        <tr>
            <th class="border p-2 w-2/4 text-left">Name</th>
            <th class="border p-2 w-1/4 text-left">Amount in cents</th>
            <th class="border p-2 w-1/4 text-left">Actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($products as $product)
            <livewire:catalog-table-row :product="$product"/>
        @endforeach
        </tbody>

    </table>
</div>
