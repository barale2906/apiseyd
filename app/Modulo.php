<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $fillable =[
        'mod_nomb',
        'mod_descr',
        'mod_deri',
        'mod_tipo',
        'mod_est'

    ];
}
