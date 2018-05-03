<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table = 'usuario';

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
        return $this->belongsToMany(
            'App\Direccion',
            'direccionusuario',
            'usuario_id', 'direccion_id');
    }

    public function roles()
    {
        return $this->belongsToMany(
            'App\Rol',
            'usuariorol',
            'usuario_id', 'rol_id');
    }

    public function negocio()
    {
        return $this->belongsToMany(
            'App\Negocio',
            'contacto',
            'usuario_id', 'negocio_id');
    }

    public function favoritos()
    {
        return $this->belongsToMany(
            'App\Oferta',
            'ofertasfavoritos',
            'usuario_id', 'oferta_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function reservas()
    {
        return $this->hasMany('App\Reserva');
    }
}
