<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable =[
        'emp_nit',
        'emp_nomb',
        'emp_dirPrin',
        'emp_tel',
        'emp_email',
        'emp_fecCie',
        'emp_carpDoc',
        'emp_carIma',
        'emp_logo',
        'emp_wLogo',
        'emp_hLogo',
        'emp_icono',
        'emp_bd',
        'emp_usuBd',
        'emp_contraBd',
        'emp_usuid',
        'emp_est'

    ];

    public function usuario(){
        return $this->belongsTo('App\User', 'emp_usuid');
    }
}
