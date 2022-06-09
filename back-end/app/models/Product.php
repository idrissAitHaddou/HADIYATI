<?php

namespace App\Models;

use Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'id_color',
        'background',
        'descritpion',
        'id_categorie',
        'id_group',
        'id_country_mode',
    ];

}
