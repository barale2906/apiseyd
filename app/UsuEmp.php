<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuEmp extends Model
{
    protected $fillable = [

        'usu_id',
        'emp_id',
        'rol_id',
        'ciu_id',
        'usEmp_princ',
        'usEmp_est'

    ];



    public function usuario(){
        return $this->belongsTo('App\User', 'usu_id');
    }

    public function empresa(){
        return $this->belongsTo('App\Empresa', 'emp_id');
    }

    public function rol(){
        return $this->belongsTo('App\Rol', 'rol_id');
    }

    public function ciudad(){
        return $this->belongsTo('App\Ciudad', 'ciu_id');
    }
}

