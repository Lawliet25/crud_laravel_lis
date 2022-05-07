@extends('layout.template')

@section('title','Lista de géneros')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de géneros</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary btn-md" href="{{route('generos.create')}}"> Nuevo género</a>
                <br>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif
                <br>
                <table class="table table-striped table-bordered table-hover" id="tabla">
                    <thead>
                        <tr>

                            <th>Nombre del género</th>
                            <th>Descripción</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($generos as $genero)

                    <tr>

                    <td>{{$genero->nombre_genero}}</td>
                    <td>{{$genero->descripcion}}</td>

                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('generos.edit', $genero->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('generos.destroy', $genero->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
