<?php

namespace App\Models;

use Model;

class User extends Model
{

    protected $fillable = [
        'email',
        'password',
        'firstname',
        'lastname',
        'fullname',
        'birthday',
        'tel',
        'ville',
        'adress',
    ];
 
}
