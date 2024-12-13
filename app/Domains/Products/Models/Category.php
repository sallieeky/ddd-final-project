<?php

namespace App\Domains\Products\Models;

use Ecommerce\Common\DataTransferObjects\Product\CategoryData;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\CategoryFactory::new();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function toData(): CategoryData
    {
        return new CategoryData($this->id, $this->name);
    }
}
