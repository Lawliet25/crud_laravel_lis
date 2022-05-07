@extends('layout.template')

@section('title','Nuevo género')

@section('content')
<h1>Formulario para ingresar un nuevo género</h1>
<div class="container">
        <div class="row">
            <h3>Nuevo género</h3>
        </div>
        <div class="row">
            <div class=" col-md-7">

                <form role="form" action="{{route('generos.store')}}" method="POST">
                    @csrf
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>

                    <div class="form-group">
                        <label for="nombre">Nombre del género:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nombre_genero" id="nombre_genero" value="{{old('nombre_genero')}}"  placeholder="Ingresa el nombre del género" >
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('nombre_genero')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contacto">Descripción:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion')}}" placeholder="Ingresa la descripción del género">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('descripcion')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                    <a class="btn btn-danger" href="{{route('generos.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
