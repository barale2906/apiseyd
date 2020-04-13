<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuloAsignado extends Model
{
    protected $fillable = [
        'mod_id',
        'emp_id',
        'usu_id',
        'modAsi_est'

    ];

    public function modulo(){
        return $this->belongsTo('App\Modulo', 'mod_id');
    }

    public function empresa(){
        return $this->belongsTo('App\Empresa', 'emp_id');
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }
}
