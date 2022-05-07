<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $autores=Autores::all();
      return view('autores.index',['autores'=>$autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('autores.create');
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
        'codigo_autor'=>['required', 'regex:/^AUT[0-9]{3}$/'],
        'nombre_autor'=>'required',
        'nacionalidad'=>'required']);

        $autor= new Autores();
        $autor->codigo_autor=$request->codigo_autor;
        $autor->nombre_autor=$request->nombre_autor;
        $autor->nacionalidad=$request->nacionalidad;

        $autor->save();
        return redirect()->route('autores.index')->with('status', 'Autor registrado exitosamente.');

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
      $autor=Autores::find($id);
      return view('autores.edit', compact('autor'));
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
        'codigo_autor'=>['required', 'regex:/^AUT[0-9]{3}$/'],
        'nombre_autor'=>'required',
        'nacionalidad'=>'required']);

        $autor= Autores::find($id);
        $autor->codigo_autor=$request->codigo_autor;
        $autor->nombre_autor=$request->nombre_autor;
        $autor->nacionalidad=$request->nacionalidad;

        $autor->save();
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $autor=Autores::destroy($id);
      return redirect()->route('autores.index');
    }
}
