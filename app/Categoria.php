<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    /**
     * The users that belong to the role.
     */
    public function ofertas()
    {
        return $this->belongsToMany('App\Oferta');
    }
}
