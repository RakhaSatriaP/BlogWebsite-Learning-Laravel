@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post -> title }}</h1>
        <h5>by : {{ $post['author'] }} in <a href="/categories/{{ $post->category->slug }}">{{ $post ->category->name }}</a></h5>
        {{-- <h5 class="mb-3"> Category : <a href="/categories/{{ $post>category->slug }}">{{ $post ->category->name }}</a> </h5> --}}
        <p>{{ $post -> body }}</p>
    </article>
    <div class="mb-5">
    <a  href="/posts">Back</a>
    </div>
@endsection




