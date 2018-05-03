<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $table = 'pago';

    /**
     * Get the post that owns the comment.
     */
    public function reserva()
    {
        return $this->belongsTo('App\Reserva');
    }
}
