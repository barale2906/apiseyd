<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuSop extends Model
{
    protected $fillable = [
        'usu_id',
        'usSop_nomDoc',
        'usSop_ruta',
        'usSop_venci',
        'usSop_exp',
        'usSop_cargue',
        'usSop_est'

    ];



    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }
}
