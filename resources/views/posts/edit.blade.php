<x-app-layout>

    <h1>Formulario para editar un post</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf
        @method('PUT')

        <label>
            Título:
            <input type="text" name="title" value="{{$post->title}}">
        </label>

        <br>
        <br>

        <label>
            Categoría:
            <input type="text" name="category" value="{{$post->category}}">
        </label>

        <br>
        <br>

        <label>
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">Editar post</button>


    </form>

</x-app-layout>