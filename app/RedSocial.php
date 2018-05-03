<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    //
    protected $table = 'redsocial';

    public function negocios()
    {
        return $this->belongsToMany(
            'App\Negocio',
            'socialesnegocio',
            'redsocial_id', 'negocio_id')->withPivot('url');
    }
}
