@extends('layout')
@section('content')
    {{-- @foreach ($posts as $post)
        
        <article class="{{ $loop->even ? 'even' : '' }}">
            <a href="/post/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->username }} </a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{!! $post->body !!}</p>
        </article>
    @endforeach --}}
    @include('includes._post-header');
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        
        @if ($posts->count())
            <x-posts-grid :posts="$posts"/>
        @else
            <p>No post have published Yet</p>
        @endif

    </main>
@endsection
