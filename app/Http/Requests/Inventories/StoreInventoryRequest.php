<?php

namespace App\Http\Requests\Inventories;

class StoreInventoryRequest extends ApiFormRequest
{
    public function rules()
    {
        return [
            'productId' => 'required|exists:products,id',
            'warehouseId' => 'required|exists:warehouses,id',
            'quantity' => 'required|numeric|min:1',
        ];
    }
}
