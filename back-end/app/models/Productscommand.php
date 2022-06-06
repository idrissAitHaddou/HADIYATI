<?php

namespace App\Models;

use Model;

class Productscommand extends Model
{
    protected $fillable = [
        'id_product',
        'quantity',
        'price',
        'command_id',
    ];
}
