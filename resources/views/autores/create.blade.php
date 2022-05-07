@extends('layout.template')

@section('title','Nuevo autor')

@section('content')
<h1>Formulario para crear nuevo autor</h1>
<div class="container">
        <div class="row">
            <h3>Nuevo autor</h3>
        </div>
        <div class="row">
            <div class=" col-md-7">

                <form role="form" action="{{route('autores.store')}}" method="POST">
                    @csrf
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
                    <div class="form-group">
                        <label for="codigo">Codigo del autor:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" value="{{old('codigo_autor')}}" placeholder="Ingresa el codigo del autor" >
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('codigo_autor')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre del autor:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" value="{{old('nombre_autor')}}"  placeholder="Ingresa el nombre del autor" >
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('nombre_autor')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contacto">Nacionalidad:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="{{old('nacionalidad')}}" placeholder="Ingresa la nacionalidad del autor">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        @error ('nacionalidad')
                          <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                    <a class="btn btn-danger" href="${pageContext.request.contextPath}/editoriales.do?op=listar">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
