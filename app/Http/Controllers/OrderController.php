<?php

namespace App\Http\Controllers;

use App\Domains\Orders\Actions\CreateOrderAction;
use App\Domains\Products\Models\Product;
use App\Http\Requests\Inventories\StoreInventoryRequest;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function store(StoreInventoryRequest $request, CreateOrderAction $createOrder)
    {
        $inventoryData = $createOrder->execute(
            Product::findOrFail($request->input('productId')),
            $request->input('quantity')
        );

        return response([
            'data' => $inventoryData,
        ], Response::HTTP_CREATED);
    }
}
