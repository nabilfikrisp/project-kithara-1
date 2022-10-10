<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use HasFactory;
    public function products(){
        return $this->hasMany(Product::class, 'item_type_id', 'id');
    }
}
