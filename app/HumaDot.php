<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HumaDot extends Model
{
    protected $fillable = [
        'dot_id',
        'dotEnt_talla',
        'dotEnt_can',
        'usu_id',
        'dotEnt_fecEnt',
        'dotEnt_est'

    ];



    public function dotacion(){
        return $this->belongsTo('App\Dotacion', 'dot_id');
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }
}
