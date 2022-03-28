<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'commande_date',
        'client_name',
        'client_prenom',
        'client_adresse',
        'client_email',
        'client_tel',
        'product_name',
        'product_price',
        'quantity_choiced',
        'total_price',
        'color_choiced',
        'size_choiced',
        'particularity',
        'done',
        'commande_done_date'
    ];
}
