<x-app-layout>

    <h1>Formulario para crear un post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.store')}}" method="POST">

        @csrf

        <label>
            Título:
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        <br>
        <br>

        <label>
            Categoría:
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        <br>
        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        <br>
        <br>
        
        <label>
            Contenido:
            <textarea name="content">{{old('content')}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">Crear post</button>


    </form>

</x-app-layout>