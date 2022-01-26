<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() {
        $chollos = Chollo::all();
        return view('inicio', compact('chollos'));
    }
    public function nuevos() {
        $chollosNuevos = Chollo::orderBy('created_at')->get();
        return view('nuevos',compact('chollosNuevos'));
    }
    public function destacados() {
        $chollosDestacados = Chollo::where('puntuacion', '>', 8)->get();
        return view('destacados', compact('chollosDestacados'));
    }
    public function formCrear() { return view('chollos.crear'); }
    public function crear(Request $request) {
        
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required'
          ]);
        
        $chollo = new Chollo();
    
        $chollo -> titulo = $request -> titulo;
        $chollo -> descripcion = $request -> descripcion;
        $chollo -> categoria = $request -> categoria;
        $chollo -> precio = $request -> precio;
        $chollo -> url = $request -> url;
        $chollo -> precio_descuento = $request -> precio_descuento;
        $chollo -> puntuacion = 0;
        $chollo -> disponible = true;
        $chollo -> save();
    
        return back() -> with('mensaje', 'Chollo agregado exitósamente');
    }
    public function formEditar($id) {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.editar', compact('chollo'));
    }

    public function editar(Request $request, $id){
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'puntuacion' => 'required'
          ]);

        $cholloEditar = Chollo::findOrFail($id);
        $cholloEditar -> titulo = $request -> titulo; 
        $cholloEditar -> descripcion = $request -> descripcion; 
        $cholloEditar -> categoria = $request -> categoria; 
        $cholloEditar -> precio = $request -> precio; 
        $cholloEditar -> precio_descuento = $request -> precio_descuento; 
        $cholloEditar -> puntuacion = $request -> puntuacion;
        $cholloEditar -> save(); 

        return back() -> with('mensaje', 'Chollo actualizado');
    }

    public function confirmEliminar($id) {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.eliminar', compact('chollo'));
    }

    public function eliminar($id){
        $cholloEliminar = Chollo::findOrFail($id);
        $cholloEliminar -> delete();

        return $this->inicio();
    }

    public function detalle($id) {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.detalle', compact('chollo'));
    }

}
