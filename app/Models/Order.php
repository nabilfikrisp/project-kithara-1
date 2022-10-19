<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_details(){
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function services(){
        return $this->belongsTo(Service::class, 'order_id', 'id');
    }

    public function buyers(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
