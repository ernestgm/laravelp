<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEntrega extends Model
{
    protected $table = 'tipoentrega';

    public function ofertas()
    {
        return $this->belongsToMany(
            'App\Oferta',
            'entrega',
            'tipoentrega_id', 'oferta_id')->withPivot('precio');
    }
}
