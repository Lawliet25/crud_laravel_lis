@extends('layout.template')

@section('title','Lista de autores')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de autores</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary btn-md" href="{{route('autores.create')}}"> Nuevo autor</a>
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
                            <th>Codigo del autor</th>
                            <th>Nombre del autor</th>
                            <th>Nacionalidad</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($autores as $autor)

                    <tr>
                    <td>{{$autor->codigo_autor}}</td>
                    <td>{{$autor->nombre_autor}}</td>
                    <td>{{$autor->nacionalidad}}</td>

                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('autores.edit', $autor->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('autores.destroy', $autor->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
