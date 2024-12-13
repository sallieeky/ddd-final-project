<?php

namespace App\Actions;

use App\Domains\Products\Models\Product;
use Ecommerce\Common\DataTransferObjects\Product\ProductData;

class CreateProductAction
{
    public function execute(ProductData $data): Product
    {
        return Product::create([
            'id' => $data->id,
            'name' => $data->name,
        ]);
    }
}
