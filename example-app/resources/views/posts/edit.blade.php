<x-app-layout>
    <a href="{{route('posts.index')}}">
        volver a posts
    </a>
    <h1>aqui se mostrara un formulario pra editar un post</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        {{-- colocamos csrf para que laravel haga el identificador unico para este formulario --}}
        @csrf
        {{-- colocamos method para que laravel sepa que el metodo que estamos usando para este formulario es put --}}
        @method('PUT')
        
        <label for="">
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug" value="{{$post->slug}}">
        </label>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br>
        <label for="">
            Contenido:
            <textarea name="content">
                {{$post->content}}
            </textarea>
        </label>
        <br>
        <button>Actualizar post</button>
    </form>
</x-app-layout>