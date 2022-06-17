<?php

namespace App\Models;

use Model;

class Like extends Model
{

    protected $fillable = [
        'id_produit',
        'id_user',
    ];

}
