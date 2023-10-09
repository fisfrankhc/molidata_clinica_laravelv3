<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthSesionApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    public function handle(Request $request, Closure $next)
    {

        //$data = $request->input('datosesion');
        //return $request->session->id;
        //dd ($request->session);
        //dd($request);
        //return $request['session'];
        $data = $request->session()->all();
        if ($data==null) {
            /* $miVariable = $request->input('miVariable');
            app()->singleton('miVariable', function () use ($miVariable) {
                return $miVariable;
            }); */
            return redirect(route('/login'));
            
            
        } 
        else 
        {
            return $next($request);
        }
    }
}
