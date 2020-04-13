<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HumaCer extends Model
{
    protected $fillable = [
        'usu_id',
        'humCer_fecgen',
        'humCer_usufir',
        'humCer_tipcer',
        'humCer_idsal',
        'humCer_usuGen'

    ];



    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }

    public function firma(){
        return $this->belongsTo('App\User', 'humCer_usufir');
    }

    public function salario(){
        return $this->belongsTo('App\usuSal', 'humCer_idsal');
    }

    public function genera(){
        return $this->belongsTo('App\User', 'humCer_usuGen');
    }
}
