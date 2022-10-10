<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function item_types()
    {
        return $this->belongsTo(ItemType::class, 'item_type_id', 'id');
    }
    public function order_detalis()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}
