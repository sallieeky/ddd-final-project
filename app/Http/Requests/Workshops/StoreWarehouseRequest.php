<?php

namespace App\Http\Requests\Workshops;

class StoreWarehouseRequest extends ApiFormRequest
{
    public function getName(): string
    {
        return $this->name;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|unique:warehouses,name',
        ];
    }
}
