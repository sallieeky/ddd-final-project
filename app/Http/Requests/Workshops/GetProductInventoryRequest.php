<?php

namespace App\Http\Requests\Workshops;

class GetProductInventoryRequest extends ApiFormRequest
{
    /**
     * @return int[]
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }

    public function rules()
    {
        return [
            'productIds' => 'required|array'
        ];
    }
}
