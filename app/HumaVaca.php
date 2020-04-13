<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class humaVaca extends Model
{
    protected $fillable = [
        'usu_id',
        'humVac_fecSalPro',
        'humVac_fecSal',
        'humVac_fecLlePro',
        'humVac_fecLle',
        'humVac_est'

    ];



    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }
}
