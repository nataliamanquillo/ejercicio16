<?php

namespace App\Http\Controllers;

use App\Models\Presidente;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PresidenteController extends Controller
{
     // Listar todos los registros
     public function index(){
        $presidentes = Presidente::orderby('id', 'asc')->get();
        return view('presidente.index', compact('presidentes'));
    }

    // Formulario create
    public function create(){
        $equipos=Equipo::orderBy('id', 'asc')->get(); 
        return view('presidente.create', compact('equipos'));
    }

    // Registrar en base de datos un viajero
    public function store(Request $request){
        $presidente = new Presidente();
        $presidente->nombre = $request->nombre;
        $presidente->apellidos = $request->apellidos;
        $presidente->ano = $request->ano;
        $presidente->fecha_nac = $request->fecha_nac;
        $presidente->equipo_id = $request->equipo_id;
        $presidente->save();
        // $viaje->viajeros()->attach($request->viajero_id);
        return redirect()->route('presidente.index');
    }

    // Ver un registro
    public function show(Presidente $presidente){
        $equipos = Equipo::orderBy('id', 'asc')->get();
        return view('presidente.show',compact('presidente','equipos'));
    }

    // Formulario editar un registro
    public function edit(Presidente $presidente){
        $equipos = Equipo::orderBy('id', 'asc')->get();
        return view('presidente.edit', compact('presidente','equipos'));
    }

    // Actualizar un registro
    public function update(Request $request, Presidente $presidente){
     
        $presidente->nombre = $request->nombre;
        $presidente->apellidos = $request->apellidos;
        $presidente->ano = $request->ano;
        $presidente->fecha_nac = $request->fecha_nac;
        $presidente->save();
        return redirect()->route('presidente.index');
    }

    // Eliminar un registro
    public function destroy (Presidente $presidente){
         $presidente->delete();
        return redirect()->route('presidente.index');
    }

}
