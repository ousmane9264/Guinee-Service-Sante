<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'nom', 
        'prenom', 
        'genre',
        'email',
        'phone',
        'password',
        'confirmation',
        'photo',
        'state'

    	];
}
