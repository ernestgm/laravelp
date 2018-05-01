<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccion';

    protected $fillable = [
        'direccion', 'municipio', 'provincia', 'cpostal', 'pais'
    ];
    /*
     *
     * $table->increments('id');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('provincia');
            $table->string('cpostal');
            $table->string('pais');**/
    //
    /**
     * Get the post that owns the comment.
     */
    public function usuario()
    {
        return $this->belongsToMany('App\Usuario', 'direccionusuario', 'direccion_id', 'usuario_id');
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
