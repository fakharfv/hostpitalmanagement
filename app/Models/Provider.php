<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pmdc',
        'expiry_date',
        'phone',
        'address',
        'available_days',
        'available_time',
        'qualification',
    ];
}
