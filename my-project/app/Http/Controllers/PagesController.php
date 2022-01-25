<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() { return view('inicio'); }
    public function nuevos() { return view('nuevos'); }
    public function destacados() { return view('destacados'); }
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
        $chollo -> precio_descuento = $request -> precio_descuento;
    
        $chollo -> save();
    
        return back() -> with('mensaje', 'Nota agregada exitósamente');
    }
}
