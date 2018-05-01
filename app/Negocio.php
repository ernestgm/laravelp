<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $table = 'negocio';
    /*
     *
     * $table->string('nombre');
                $table->string('correo');
                $table->string('telefono');*/

    protected $fillable = [
        'nombre', 'correo', 'telefono'
    ];

    public function direccion()
    {
        return $this->belongsToMany(
            'App\Direccion',
            'direccionnegocio',
            'negocio_id', 'direccion_id')->withPivot('geolocalizacion');
    }
}
