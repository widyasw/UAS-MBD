<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;
    protected $table = 'shippers';
    protected $fillable = [
        'id',
        'company_name',
        'phone',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'shippers_id');
    }
}
