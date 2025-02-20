<x-app-layout>
    <a href="/posts/create">Crear un posts</a>
    <h1>aqui se mostraran los post</h1>
    <ul>
    @foreach ($posts as $post) 
        <li>
            <a href="/posts/{{$post->id}}">
                {{$post->title}}
            </a>
        </li>
    @endforeach
    </ul>       

    {{$posts->links() }}
</x-app-layout>
