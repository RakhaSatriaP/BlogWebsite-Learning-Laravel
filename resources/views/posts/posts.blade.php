@extends('layouts.main')
@section('container')

<h1 class="mb-5">Post Blog: </h1>

@foreach ($posts as $item)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $item['slug'] }}">{{ $item["title"] }}</a>
        </h2>
        <h5> By: <a href="#">{{ $item['user']['name'] ?? 'Unknown' }}</a></h5>
        <p>{{ $item["excerpt"] }}.....<a href="/posts/{{ $item['slug'] }}">Read more</a></p>
        <hr>
    </article>
@endforeach

@endsection
