<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
