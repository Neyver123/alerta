<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $publi = new Publicacion();
            $resultado = $publi::get();
            return view('publicacion.mostrar')
                ->with('publicaciones', $resultado)
                ->with('titulo', 'MOSTRAR PUBLICACION');
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
        return view('publicacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "incidente" => "required | alpha | max 100",
            "lugar" => "required | max:20"
        ]);

        $publi = new Publicacion();
        $publi->incidente = $request->incidente;
        $publi->lugar = $request->lugar;
        $publi->fecha = $request->fecha;
        $publi->imagen = $request->addslashes(file_get_contents($_FILES["imag"]["tp_name"]));
        $publi-> save();
        return redirect(Route("publicacion.index"));
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
        $resultado = Publicacion::find($id);
        return view('publicacion.editar', ["publicacion"=>$resultado]);
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
        $publi = Publicacion::find($id);
        $publi->id_usuario = $request->idusu;
        $publi->incidente = $request->inci;
        $publi->lugar = $request->lugar;
        $publi->fecha = $request->fech;
        $publi-> save();
        return redirect(Route("publicacion.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publi = Publicacion::find($id);
        $publi->delete();
        return redirect(Route("publicacion.index"));
    }
}
