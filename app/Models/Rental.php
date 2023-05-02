<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'realestate_id',
        'booking_date',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
