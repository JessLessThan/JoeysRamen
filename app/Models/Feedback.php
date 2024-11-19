<?php

// app/Models/Feedback.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rating', 'feedback', 'user_name', 'location'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}