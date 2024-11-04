<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagadianTabledata extends Model
{
    use HasFactory;

    protected $table = 'OzamizTabledata';

    protected $fillable = [
        'table',
        'table_capacity',
    ];
}
