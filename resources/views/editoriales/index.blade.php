@extends('layout.template')

@section('title','Lista de editoriales')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de editoriales</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary btn-md" href="{{route('editoriales.create')}}"> Nuevo editorial</a>
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
                            <th>Codigo del editorial</th>
                            <th>Nombre del editorial</th>
                            <th>Contacto</th>
                            <th>Telefono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($editoriales as $editorial)

                    <tr>
                    <td>{{$editorial->codigo_editorial}}</td>
                    <td>{{$editorial->nombre_editorial}}</td>
                    <td>{{$editorial->contacto}}</td>
                    <td>{{$editorial->telefono}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('editoriales.edit', $editorial->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('editoriales.destroy', $editorial->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
