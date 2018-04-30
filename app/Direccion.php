<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    /**
     * Get the post that owns the comment.
     */
    public function usuario()
    {
        return $this->belongsToMany('App\Usuario')->using('App/DireccionUsuario');
    }

    //

    /**
     * Get the post that owns the comment.
     */
    public function negocio()
    {
        return $this->belongsToMany('App\Negocio')->using('App/DireccionNegocio');
    }
}
