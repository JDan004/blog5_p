<x-app-layout>

    <h1>Formulario para crear un post</h1>

    <form action="{{route('posts.store')}}" method="POST">

        @csrf

        <label>
            Título:
            <input type="text" name="title">
        </label>

        <br>
        <br>

        <label>
            Categoría:
            <input type="text" name="category">
        </label>

        <br>
        <br>

        <label>
            Slug:
            <input type="text" name="slug">
        </label>

        <br>
        <br>
        
        <label>
            Contenido:
            <textarea name="content"></textarea>
        </label>

        <br>
        <br>

        <button type="submit">Crear post</button>


    </form>

</x-app-layout>