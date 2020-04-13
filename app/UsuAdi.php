<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuAdi extends Model
{
    protected $fillable = [
        'usu_id',
        'usAd_dir',
        'usAd_tel',
        'usAd_eps',
        'usAd_pens',
        'usAd_cesa',
        'usAd_tipCon',
        'usAd_est'

    ];



    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }
}
