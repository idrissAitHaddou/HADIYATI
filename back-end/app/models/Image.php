<?php

namespace App\Models;

use Model;

class Image extends Model
{
    protected $fillable = [
        'src',
        'id_produit',
    ];
}
