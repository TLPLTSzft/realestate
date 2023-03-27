<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    use HasFactory;

    protected $fillable = [
        'realestate_code',
        'address',
        'room',
        'furnishing',
        'rental_fee',
        'sale_price',
        'description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
