<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     * $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo')->unique();
            $table->string('password');
            $table->string('telefono');
            $table->string('movil');
            $table->string('direccion');
     *
     * */
    protected $fillable = [
        'nombre', 'apellidos', 'correo', 'password', 'telefono', 'movil'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function direcciones()
    {
        return $this->hasMany('App/Direccion');
    }
}
