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

    public function contacto()
    {
        return $this->belongsToMany(
            'App\Usuario',
            'contacto',
            'negocio_id', 'usuario_id');
    }

    public function medias()
    {
        return $this->belongsToMany(
            'App\Media',
            'mediasnegocio',
            'negocio_id', 'media_id')->withPivot('resolucion');
    }

    /**
     * Get the comments for the blog post.
     */
    public function ofertas()
    {
        return $this->hasMany('App\Oferta');
    }

    public function redessociales()
    {
        return $this->belongsToMany(
            'App\RedSocial',
            'socialesnegocio',
            'negocio_id', 'redsocial_id')->withPivot('url');
    }

}
