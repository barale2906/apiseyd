<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactProd extends Model
{
    protected $fillable = [
        'facp_nom',
        'facp_des',
        'facp_tipo',
        'facp_est',


    ];

    public function tipoproduc(){
        return $this->belongsTo('App\FactTipProd', 'facp_tipo');
    }
}
