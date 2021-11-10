<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $admin = new Administrador();
            $resultado = $admin::get();
            return view('administrador.mostrar')
                ->with('adminis', $resultado)
                ->with('titulo', 'MOSTRAR ADMINISTRADORES');
        }else{
            return redirect(route('login'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Administrador();
        $admin->nom_usu = $request->nomusu;
        $admin->contraseña = $request->contraseña;
        $admin-> save();
        return redirect(Route("administrador.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultado = Administrador::find($id);
        return view('administrador.editar', ["administrador"=>$resultado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Administrador::find($id);
        $admin->nom_usu = $request->nomusu;
        $admin->contraseña = $request->pass;
        $admin-> save();
        return redirect(Route("administrador.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Administrador::find($id);
        $admin->delete();
        return redirect(Route("administrador.index"));
    }
}
