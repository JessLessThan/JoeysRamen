<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_quantity',
        'customer_name',
        'customer_phone',
        'customer_location',
        'order_total_price',
        'order_photo',
        'order_name',
        'order_type',
        'order_date',
        'order_time',
        'form_location',
        'form_detailed_location',
        'user_id',
    ];

    protected $casts = [
        'order_time' => 'datetime:H:i:s',
    ];
    
}
