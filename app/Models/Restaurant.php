<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable =[
        'restaurant_name',
        'description',
        'adresse',
        'picture',
        'total_reviews',
        'user_id'
    ];
}
