<?php

namespace App\Http\Controllers;

use App\Domains\Products\Models\Product;
use App\Domains\Warehouse\Actions\CreateInventoryAction as ActionsCreateInventoryAction;
use App\Domains\Warehouse\Models\Warehouse;
use App\Http\Requests\Inventories\StoreInventoryRequest;
use Illuminate\Http\Response;

class InventoryController extends Controller
{
    public function store(StoreInventoryRequest $request, ActionsCreateInventoryAction $createInventory)
    {
        $inventoryData = $createInventory->execute(
            Product::findOrFail($request->getProductId()),
            Warehouse::findOrFail($request->getWarehouseId()),
            $request->input('quantity')
        );

        return response([
            'data' => $inventoryData,
        ], Response::HTTP_CREATED);
    }
}
