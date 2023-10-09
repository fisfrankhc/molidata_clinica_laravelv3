<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Sucursale;

use Illuminate\Support\Facades\Http;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /* $listaDeUsuarios = User::all(); */
        $listaDeUsuarios = HTTP::get('https://gifmigente.com/clinico/general/usuario.php');
        $listaDeUsuario=$listaDeUsuarios->json();
        /* foreach($listaDeUsuarios as $usuarioDato){
            echo $usuarioDato->user_name;
        } */
    /* return $listaDeUsuario; */
        return view('usuarios.index', compact('listaDeUsuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        /* $listaDeRoles = Role::all();
        $listaDeSucursales = Sucursale::all();
        return view('usuarios.create', compact(['listaDeRoles', 'listaDeSucursales'])); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        /* $usuarioNuevo = new User;
        $usuarioNuevo->name = $request->input('name');
        $usuarioNuevo->user_telefono = $request->input('user_telefono');
        $usuarioNuevo->email = $request->input('email');
        $usuarioNuevo->password = $request->input('password');
        $usuarioNuevo->rol_id = $request->input('rol_id');
        $usuarioNuevo->sucursal_id = $request->input('sucursal_id');
        $usuarioNuevo->user_estado = $request->input('user_estado');

        $usuarioNuevo->save();
        return redirect()->route('usuarios.index'); */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Usuario)
    {
        //
        /* $Usuario = User::find($Usuario);
        $listaDeRoles = Role::all();
        $listaDeSucursales = Sucursale::all();
        return view('usuarios.edit', compact(['Usuario', 'listaDeRoles', 'listaDeSucursales'])); */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $usuarioId)
    {
        //
        /* $datosUsuario = User::find($usuarioId);
        $datosUsuario->name = $request->input('name');
        $datosUsuario->user_telefono = $request->input('user_telefono');
        $datosUsuario->email = $request->input('email');
        $datosUsuario->password = $request->input('password');
        $datosUsuario->rol_id = $request->input('rol_id');
        $datosUsuario->sucursal_id = $request->input('sucursal_id');
        $datosUsuario->user_estado = $request->input('user_estado');

        $datosUsuario->update();
        return redirect()->route('usuarios.index'); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($usuarioId)
    {
        //
        /* $datosUsuario = User::find($usuarioId);
        $datosUsuario->delete();
        return redirect()->route('usuarios.index'); */
    }
}
