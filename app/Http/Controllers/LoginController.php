<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

        $credentials = [
            "user_name" => $request->user_name,
            "password" => $request->password
        ];
        $named = $credentials['user_name'];
        $passd = $credentials['password'];

        $usuariolog = HTTP::get('https://gifmigente.com/clinico/general/usuario-name.php?name=' . $named);
        $usuariologjs = $usuariolog->json();

        $response = Http::withBasicAuth($named, md5($passd))->withToken('token')->get('https://gifmigente.com/clinico/general/usuario-name.php?name=' . $named);
        $data = $response->json();
        /* $data1 = $data[0];
        $data1 = "hola"; */

        /* dump($response->status());
        dump($response->json()); */

        //MANTENER INICIADA LA SESION UNA VEZ MARCADA EL CHECK 
        /* $remember = ($request->has('remember') ? true : false); */

        if ($data == "no hay resultados") {
            return "ALGO SALIO MAL";
        } else {

            // Guardar la variable en el contenedor de servicios
            app()->instance('mi_variable', $data);

            $request->session()->regenerate();
            //return redirect()->intended(route('home'));
            return view('/home', compact('data'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
