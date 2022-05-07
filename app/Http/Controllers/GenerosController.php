<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $generos=Generos::all();
      return view('generos.index',['generos'=>$generos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('generos.create');
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

        'nombre_genero'=>'required',
        'descripcion'=>'required']);

        $genero= new Generos();

        $genero->nombre_genero=$request->nombre_genero;
        $genero->descripcion=$request->descripcion;

        $genero->save();
        return redirect()->route('generos.index')->with('status', 'Género registrado exitosamente.');
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
      $genero=Generos::find($id);
      return view('generos.edit', compact('genero'));
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
      $request->validate([

        'nombre_genero'=>'required',
        'descripcion'=>'required']);

        $genero= Generos::find($id);

        $genero->nombre_genero=$request->nombre_genero;
        $genero->descripcion=$request->descripcion;

        $genero->save();
        return redirect()->route('generos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $genero=Generos::destroy($id);
      return redirect()->route('generos.index');
    }
}
