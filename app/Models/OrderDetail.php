<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'id',
        'products_id',
        'unit_price',
        'quantity',
        'discount',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_id');
    }
}
