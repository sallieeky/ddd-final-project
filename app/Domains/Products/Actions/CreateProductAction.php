<?php

namespace App\Domains\Products\Actions;

use App\Domains\Products\Models\Category;
use App\Domains\Products\Models\Product;
use App\Domains\Products\Services\RedisService;

class CreateProductAction
{
    public function execute(Category $category, string $name, string $description, float $price): Product
    {
        $product = Product::create([
            'category_id' => $category->id,
            'name' => $name,
            'description' => $description,
            'price' => $price
        ]);

        return $product;
    }
}
