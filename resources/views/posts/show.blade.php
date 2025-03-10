<x-app-layout>

    <a href="{{route('posts.index')}}">Volver al inicio</a>

    <h1>Título: {{$post->title}}</h1>
    <p>
        <b>Categoría:</b>
        {{$post->category}}
    </p>

    <p>
        <b>Contenido:</b>
        {{$post->content}}
    </p>

    <a href="{{route('posts.edit', $post)}}">Editar post</a>

    <form action="{{route('posts.destroy', $post)}}" method="POST">
        
        @csrf
        @method('DELETE')

        <br>
 
        <button type="submit">Borrar post</button>
    </form>

</x-app-layout>