<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [
        'id',
        'company_name',
        'contact_title',
        'address',
        'city',
        'region',
        'postal_code',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customers_id');
    }
}
