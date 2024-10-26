<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagadianProducts extends Model
{
    use HasFactory;

    protected $table = 'pagadian_products';

    protected $fillable = [
        'name',
        'price',
        'category',
        'photo',
        'status',
    ];
}
