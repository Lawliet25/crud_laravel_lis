<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutoresApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autores::all();
        return $autores;
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
      $autores= new Autores();
      $autores->codigo_autor=$request->codigo_autor;
      $autores->nombre_autor=$request->nombre_autor;
      $autores->nacionalidad=$request->nacionalidad;
      $autores->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $autores = Autores::find($id);
      return $autores;
    }
    public function details($code)
    {
    $autores= Autores::where('codigo_autor',$code)->get();
    return $autores;
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
    public function update(Request $request)
    {
      $autores= Autores::find($request->id);
      $autores->codigo_autor=$request->codigo_autor;
      $autores->nombre_autor=$request->nombre_autor;
      $autores->nacionalidad=$request->nacionalidad;
      $autores->save();
      return $autores;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $autores=Autores::destroy($id);
      return $autores;
    }
}
