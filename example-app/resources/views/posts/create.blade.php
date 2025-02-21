<x-app-layout>
    <a href="{{route('posts.index')}}">volver a post</a>
    <h1>aqui se mostrara un formulario pra crear un nuevo post</h1>
    <form action="{{route('posts.index')}}" method="POST">
        @csrf
        <label for="">
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug">
        </label>
        <br>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <label for="">
            Contenido:
            <textarea name="content" id="">
                
            </textarea>
        </label>
        <br>
        <br>
        <button>Crear</button>
    </form>
</x-app-layout>