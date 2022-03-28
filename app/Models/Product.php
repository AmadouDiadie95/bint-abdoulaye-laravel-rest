<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'name',
        'description',
        'price',
        'quantity',
        'colors_availaibles',
        'sizes_availaibles',
        'add_date',
        'category_name',
        'populary',
        'new_product',
        'particularity',
        'image',
        'image2',
        'image3',
        'image4',
        'image5'
    ];
}
