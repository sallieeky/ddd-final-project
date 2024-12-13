<?php

namespace App\Domains\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected static function newFactory()
    // {
    //     return \Database\Factories\CategoryFactory::new();
    // }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
