<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'realestate_id',
        'sale_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
