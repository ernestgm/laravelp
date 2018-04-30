<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionUsuario extends Pivot
{
    protected $table = 'direccionusuario';

    public function direccion()
    {
        return $this->hasMany('App/Direccion');
    }
}
