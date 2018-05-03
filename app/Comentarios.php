<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    //
    protected $table = 'comentarios';

    /**
     * Get the post that owns the comment.
     */
    public function reserva()
    {
        return $this->belongsTo('App\Reserva');
    }
}
