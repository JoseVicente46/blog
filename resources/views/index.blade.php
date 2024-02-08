@extends('plantilla')
@section('titulo', 'Listado de posts')
@section('contenido')
<h1>Listado de posts</h1>
<ul class="list-group">
@foreach ($odenados as $post)
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <li class="list-group-item">{{ $post["titulo"]}} ({{$post->usuario->login}})
        <a class="btn btn-info" href="{{ route('posts.show', $post['id']) }}">Ver</a> 
        <input type="submit" class="btn btn-danger" value="Borrar post" />
    </li>
</form>
@endforeach
</ul>
{{ $posts->links() }}
@endsection