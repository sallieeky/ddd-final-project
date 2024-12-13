<?php

namespace App\Domains\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\ProductFactory::new();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceFormattedAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }
}
