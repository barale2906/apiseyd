<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable =[
        'rol_nomb',
        'rol_descr',
        'rol_est'

    ];
}
