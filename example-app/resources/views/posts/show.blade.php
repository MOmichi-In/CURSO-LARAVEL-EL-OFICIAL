
<x-app-layout>
    <a href="{{route('posts.index')}}">volver a posts</a>
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>categoria:</b> 
        {{$post->category}}
    </p> 

    <p> {{$post->content}} </p>

    <a href="{{route('posts.edit', $post)}}">Editar Posts</a>

    <form action="{{route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar post
        </button>
    </form>
</x-app-layout>
