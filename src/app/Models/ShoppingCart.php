<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'state_id',
        'city',
        'name',
        'phone',
        'postal_code',
        'lastname',
        'document',
        'email',
        'address',
        'complement',
        'total',
        'items',
    ];
}
