<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Usuario');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comentarios()
    {
        return $this->hasMany('App\Comentarios');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function pago()
    {
        return $this->hasOne('App\Pago');
    }
}
