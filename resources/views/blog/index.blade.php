@extends('base')

@section('title', 'Accueil du blog')

@section('content')
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Mon blog</h1>

    @foreach ($posts as $post)

        <article>
            <h2 class="text-4xl font-extrabold">
                {{ $post->title }}
            </h2>
            <p class="mb-3 text-lg text-gray-500 md:text-xl">
                {{ $post->content }}
            </p>
            <p>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Lire la suite</a>
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}

    @endsection
