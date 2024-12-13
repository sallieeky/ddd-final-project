<?php

namespace App\Domains\Warehouse\Actions;

use App\Domains\Warehouse\Models\Inventory;
use App\Domains\Warehouse\Models\Warehouse;
use App\Domains\Products\Models\Product;

class CreateInventoryAction
{
    public function execute(Product $product, Warehouse $warehouse, float $quantity): Inventory
    {
        $Inventory = Inventory::create([
            'product_id' => $product->id,
            'warehouse_id' => $warehouse->id,
            'quantity' => $quantity,
        ]);

        return $Inventory;
    }
}
