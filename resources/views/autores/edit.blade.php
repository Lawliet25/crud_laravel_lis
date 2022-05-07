@extends('layout.template')

@section('title','Editando editorial')

@section('content')
<h1>Formulario para editar autor</h1>
<div class="container">
        <div class="row">
            <h3>Editar autor</h3>
        </div>
        <div class="row">
            <div class=" col-md-7">

                <form role="form" action="{{route('autores.update',$autor->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$autor->id}}">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
                    <div class="form-group">
                        <label for="codigo">Codigo del autor:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" value="{{($autor->codigo_autor)}}" placeholder="Ingresa el codigo del autor" >
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('codigo_autor')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre del autor:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" value="{{($autor->nombre_autor)}}"  placeholder="Ingresa el nombre del autor">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('nombre_autor')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contacto">Nacionalidad:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="{{($autor->nacionalidad)}}" placeholder="Ingresa la nacionalidad del autor">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('nacionalidad')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                    <a class="btn btn-danger" href="${pageContext.request.contextPath}/autores.do?op=listar">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
