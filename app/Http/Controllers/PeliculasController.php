<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //devuelve todos los datos de la tabla en modelo
        $peliculas = pelicula::all();
        return $peliculas;
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
        //trea los datos del formulario
        $pelicula = new pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->duracion = $request->duracion;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->save();
        $peliculas = pelicula::all();
        return $peliculas;
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
        $pelicula = pelicula::find($id);
        return $pelicula;
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
        //actualiza los datos de la base de datos
        $pelicula = pelicula::find($id);
        $pelicula->titulo = $request->titulo;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->duracion = $request->duracion;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->save(); 
        $peliculas = pelicula::all();
        return $peliculas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //borra los datos de la base de datos
        $pelicula = pelicula::find($id);
        $pelicula->delete();
        
    }
}
