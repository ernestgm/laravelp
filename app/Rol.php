<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    //

    /**
     * Get the post that owns the comment.
     */
    public function usuario()
    {
        return $this->belongsToMany('App\Usuario', 'usuariorol', 'rol_id', 'usuario_id');
    }
}
