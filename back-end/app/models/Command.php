<?php

namespace App\Models;

use Model;

class Command extends Model
{
    protected $fillable = [
        'id_user',
        'total',
        'tel',
        'adress',
        'ville',
    ];
}
