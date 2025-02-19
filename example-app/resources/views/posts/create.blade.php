<x-app-layout>
    <a href="/posts">volver a post</a>
    <h1>aqui se mostrara un formulario pra crear un nuevo post</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="">
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category">
        </label>
        <br>
        <label for="">
            Contenido:
            <textarea name="content" id="">
                
            </textarea>
        </label>
        <br>
        <button>Crear</button>
    </form>
</x-app-layout>