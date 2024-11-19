<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'table_id',
        'table_number',
        'number_of_persons',
        'reservation_date',
        'reservation_time',
        'description',
        'pre_order_quantity',
        'pre_order_productname',
        'pre_order_total',
        'location',
        'user_id',
    ];
}
