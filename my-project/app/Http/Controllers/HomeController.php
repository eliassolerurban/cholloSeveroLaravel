<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Chollo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio() {
        $chollos = Chollo::with("user")->get();
        $categorias = Categoria::all();
        // $chollos = Chollo::all();
        $chollos = Chollo::paginate(3);
        return view('inicio', compact('chollos'));
    }

    public function formCrear() { 
        $categorias = Categoria::all();
        return view('chollos.crear', compact("categorias"));
    }
    public function crear(Request $request) {
        
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categorias' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required'
          ]);
        
        $chollo = new Chollo();
    
        $id = auth() -> user() -> id;
        $chollo -> titulo = $request -> titulo;
        $chollo -> descripcion = $request -> descripcion;
        $chollo -> precio = $request -> precio;
        $chollo -> url = $request -> url;
        $chollo -> precio_descuento = $request -> precio_descuento;
        $chollo -> puntuacion = 0;
        $chollo -> disponible = true;
        $chollo -> user_id = $id;
        $chollo -> save();

        $chollo->attachCategorias($request -> categorias);

        return back() -> with('mensaje', 'Chollo agregado exitósamente');
    }
    
    public function formEditar($id) {
        $chollo = Chollo::findOrFail($id);
        $categorias = Categoria::all();
        return view('chollos.editar', compact('chollo', 'categorias'));
    }

    public function editar(Request $request, $id){
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categorias' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'puntuacion' => 'required'
          ]);

        $cholloEditar = Chollo::findOrFail($id);
        $cholloEditar -> titulo = $request -> titulo; 
        $cholloEditar -> descripcion = $request -> descripcion; 
        $cholloEditar -> precio = $request -> precio; 
        $cholloEditar -> precio_descuento = $request -> precio_descuento; 
        $cholloEditar -> puntuacion = $request -> puntuacion;
        $cholloEditar -> save(); 
        
        $cholloEditar -> detachCategorias($cholloEditar -> categorias);
        $cholloEditar -> attachCategorias($request -> categorias);
        return back() -> with('mensaje', 'Chollo actualizado');
    }

    public function confirmEliminar($id) {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.eliminar', compact('chollo'));
    }

    public function eliminar($id){
        $cholloEliminar = Chollo::findOrFail($id);
        $cholloEliminar -> delete();
        $cholloEliminar->categoria() -> detach( $cholloEliminar -> categoria );
        
        return redirect('/');
    }

    // public function inicio() {
    //     return auth()->user();
      
    //     // return auth()->user() -> name;
    //     // return auth()->user() -> email;
    //     // ...
    //   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
