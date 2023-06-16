<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'id',
        'lastname',
        'firstname',
        'title',
        'title_of_courtesy',
        'birtdate',
        'hire_date',
        'address',
        'city',
        'region',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'employees_id');
    }
}
