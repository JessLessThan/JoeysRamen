<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Products extends Model
    {
        use HasFactory;

        protected $table = 'products';

        protected $fillable = [
            'name',
            'price',
            'description',
            'photo',
            'status',
            
        ];

        public function orders()
        {
            return $this->belongsToMany(Order::class,);
        }
    }
    
