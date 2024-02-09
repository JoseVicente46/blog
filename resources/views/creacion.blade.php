@extends('plantilla')
@section('titulo', 'Creacion de un post')
@section('contenido')
<form name="form" action="{{route('posts.store')}}" method="POST">
@csrf
@method("POST")
    <table class="table">
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Titulo</th>
            <th scope="col">Contenido</th>
            <th scope="col">Publicar post</th>
        </tr>
        <tr>
            <td>
                <select class="form-select" name="usuario">
                    @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->login}}</option>
                    @endforeach
                </select>
            </td>
            <td><input class="form-control" type="text" name="titulo"></td>
            <td><input class="form-control" type="text" name="contenido"></td>
            <td><button type="submit" class="btn btn-primary">Publicar</button></td>
        </tr>
    </table>
</form>
<br>
<a class="btn btn-info" href="{{ route('posts.index') }}">Volver al listado</a>
@endsection