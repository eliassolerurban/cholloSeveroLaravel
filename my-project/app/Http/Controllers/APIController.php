<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chollos = Chollo::all();
        return $chollos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required'
          ]);
        
        $chollo = new Chollo();
    
        $id = 1;
        $chollo -> titulo = $request -> titulo;
        $chollo -> descripcion = $request -> descripcion;
        $chollo -> precio = $request -> precio;
        $chollo -> url = $request -> url;
        $chollo -> precio_descuento = $request -> precio_descuento;
        $chollo -> puntuacion = 0;
        $chollo -> disponible = true;
        $chollo -> save();
        $chollo -> user_id = $id;

        $chollo -> categoria()->attach(1);
        return response()->json($chollo, 201);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function chollo($id){
        return Chollo::findOrFail($id);       
    }

    public function cholloRandom(){
        // $idChollos = Chollo::all('id');
        // $randomIndex = rand(0, count($idChollos) - 1);
        // $randomId = $idChollos[$randomIndex];
        // return $this->chollo($randomId);
        return Chollo::inRandomOrder()->limit(1)->get();
    }
}
