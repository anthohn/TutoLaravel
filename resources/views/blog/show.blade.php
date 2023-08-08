@extends('base')

@section('title', $post->title)

@section('content')
    <article>
        <h2 class="text-4xl font-extrabold">
            {{ $post->title }}
        </h2>
        <p class="mb-3 text-lg text-gray-500 md:text-xl">
            {{ $post->content }}
        </p>
    </article>
@endsection
