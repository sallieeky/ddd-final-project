<?php

namespace App\Domains\Orders\Actions;

use App\Domain\Orders\Models\Order;
use App\Domains\Products\Models\Category;
use App\Domains\Products\Models\Product;

class CreateOrderAction
{
    public function execute(Product $product, float $quantity): Order
    {
        $product = Order::create([
            'product_id' => $product->id,
            'total' => $product->price * $quantity,
        ]);

        return $product;
    }
}
