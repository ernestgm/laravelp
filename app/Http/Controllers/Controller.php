<?php

namespace App\Http\Controllers;

use App\Direccion;
use App\Negocio;
use App\Usuario;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
//        $direcciones = Usuario::find(1)->direcciones();
//
//        $direcciones->create([
//            'direccion' => 'asdfasdf',
//            'municipio' => 'asdfasdfasdf',
//            'provincia' => 'adsfadsfadsf',
//            'cpostal' => 'asdfasdfasdf',
//            'pais' => 'asdfasdfasdf'
//        ]);

        $direcciones = Negocio::find(1)->direccion();//->first()->pivot->geolocalizacion;
//        $dir = $direcciones->create([
//            'direccion' => 'asdfasdf',
//            'municipio' => 'asdfasdfasdf',
//            'provincia' => 'adsfadsfadsf',
//            'cpostal' => 'asdfasdfasdf',
//            'pais' => 'asdfasdfasdf'
//        ]);


        $direcciones->updateExistingPivot(Negocio::find(1)->direccion()->first()->id, ['geolocalizacion' => 'qqqqqq']);

        dump($direcciones);
        return 'OK';
    }
}
