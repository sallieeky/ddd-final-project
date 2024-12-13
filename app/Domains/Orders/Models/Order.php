<?php

namespace App\Domain\Orders\Models;

use App\Domains\Products\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'total',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
