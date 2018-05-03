<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $table = 'media';

    /**
     * Get the post that owns the comment.
     */
    public function negocio()
    {
        return $this->belongsToMany('App\Negocio',
            'mediasnegocio',
            'media_id',
            'negocio_id')->withPivot('resolucion');
    }

    /**
     * Get the post that owns the comment.
     */
    public function oferta()
    {
        return $this->belongsToMany('App\Oferta',
            'mediasoferta',
            'media_id',
            'oferta_id')->withPivot('resolucion');
    }
}
