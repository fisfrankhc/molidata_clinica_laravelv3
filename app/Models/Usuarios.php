<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Http\Request;

class Usuarios extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function Usuarios(Request $request){

        $Usuarios = HTTP::get('https://gifmigente.com/clinico/general/usuario-name.php?name=' . $request);
        return $Usuarios;

    }



}
