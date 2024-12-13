<?php

namespace App\Http\Controllers;

use App\Domains\Products\Models\Product as ModelsProduct;
use App\Domains\Warehouse\Actions\CreateInventoryAction as ActionsCreateInventoryAction;
use App\Domains\Warehouse\Models\Warehouse as ModelsWarehouse;
use App\Http\Requests\StoreInventoryRequest;
use Illuminate\Http\Response;

class InventoryController extends Controller
{
    public function store(StoreInventoryRequest $request, ActionsCreateInventoryAction $createInventory)
    {
        $inventoryData = $createInventory->execute(
            ModelsProduct::findOrFail($request->getProductId()),
            ModelsWarehouse::findOrFail($request->getWarehouseId()),
            $request->input('quantity')
        );

        return response([
            'data' => $inventoryData,
        ], Response::HTTP_CREATED);
    }
}
