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

</x-app-layout>