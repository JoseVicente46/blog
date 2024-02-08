@extends('plantilla')
@section('titulo', 'Ficha posts')
@section('contenido')
<h1>Ficha de "{{ $post->titulo }}"</h1>
<ul class="list-group">
  <li class="list-group-item">Autor: {{$post->usuario->login}}</li>
  <li class="list-group-item">Contenido: {{ $post->contenido}}</li>
  <li class="list-group-item">Fecha de creación: {{$post->created_at}}</li>
</ul>
<br>
<a class="btn btn-info" href="{{ route('posts.index') }}">Volver</a>
@endsection