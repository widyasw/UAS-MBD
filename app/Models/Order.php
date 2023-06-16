<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'customers_id',
        'employees_id',
        'order_date',
        'required_date',
        'shipped_date',
        'ship_via',
        'ship_freight',
        'ship_name',
        'ship_address',
        'ship_city',
        'ship_region',
        'ship_postal_code',
        'ship_country',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employees_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'orders_id');
    }

    public function shipper()
    {
        return $this->belongsTo(Shipper::class, 'shippers_id');
    }
}
