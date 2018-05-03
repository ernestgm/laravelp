<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';

    /**
     * Get the post that owns the comment.
     */
    public function negocio()
    {
        return $this->belongsTo('App\Negocio');
    }

    public function medias()
    {
        return $this->belongsToMany(
            'App\Media',
            'mediasoferta',
            'oferta_id', 'media_id')->withPivot('resolucion');
    }

    public function favoritos()
    {
        return $this->belongsToMany(
            'App\Usuario',
            'ofertasfavoritos',
            'oferta_id', 'usuario_id');
    }

    public function entregas()
    {
        return $this->belongsToMany(
            'App\TipoEntrega',
            'entrega',
            'oferta_id', 'tipoentrega_id')->withPivot('precio');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function categoria()
    {
        return $this->hasOne('App\Categoria');
    }
}
