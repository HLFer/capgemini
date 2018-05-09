<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'street', 'number', 'neighborhood', 'city',
    ];
}
