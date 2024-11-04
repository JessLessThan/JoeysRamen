<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OzamizTabledata extends Model
{
    use HasFactory;

    protected $table = 'Ozamiz_Tabledatas';

    protected $fillable = [
        'table',
        'table_capacity',
    ];
}
