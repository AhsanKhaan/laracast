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
        <x-post-featured-card/>
        <div class="lg:grid lg:grid-cols-2">
            <x-post-card/>
            <x-post-card/>
        </div>

        <div class="lg:grid lg:grid-cols-3">
            

           <x-post-card/>
           <x-post-card/>
           <x-post-card/>
        </div>
    </main>
@endsection
