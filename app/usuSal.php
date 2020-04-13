<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuSal extends Model
{
    protected $fillable = [
        'usu_id',
        'usSa_salario',
        'usSa_roda',
        'usSa_bono',
        'usSa_comision',
        'usSa_vigencia',
        'usSa_est'

    ];



    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }
}


