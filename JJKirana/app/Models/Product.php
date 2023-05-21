<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 'price', 'rate', 'image', 'description', 'real_price', 'badge', 'category_id', 'brand_id'
    ];
}
