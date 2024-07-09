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
        return view('viaje.index', compact('viajes'));
    }

    // Formulario create
    public function create(){
        $equipos=Equipo::orderBy('id', 'asc')->get(); 
        return view('presidente.create', compact('viajeros'));
    }

    // Registrar en base de datos un viajero
    public function store(Request $request){
        $presidente = new Presidente();
        $presidente->num_plazas = $request->num_plazas;
        $presidente->fecha = $request->fecha;
        $presidente->otros_datos = $request->otros_datos;
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
    public function edit(Equipo $viaje){
        $viajeros = Viajero::orderBy('id', 'asc')->get();
        return view('viaje.edit', compact('viaje','viajeros'));
    }

    // Actualizar un registro
    public function update(Request $request, Viaje $viaje){
     
        $viaje->num_plazas = $request->num_plazas;
        $viaje->fecha = $request->fecha;
        $viaje->otros_datos = $request->otros_datos;
        $viaje->save();
        return redirect()->route('viaje.index');
    }

    // Eliminar un registro
    public function destroy (Viaje $viaje){
         $viaje->delete();
        return redirect()->route('viaje.index');
    }

}
