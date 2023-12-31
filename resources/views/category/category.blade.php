@extends('layouts.main')
@section('container')

{{-- <h1 class="mb-5">Post Category : {{ $category }} </h1> --}}
<h1>{{ $title }}</h1>

@foreach ($posts as $item)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $item['slug'] }}">{{ $item["title"] }}</a>
        </h2>
        <h5> By : <a href="#">{{ $item['user']['name'] ?? 'Unknown' }}</a> </h5>
        <p>{{ $item["excerpt"] }}.....<a href="/posts/{{ $item['slug'] }}"><i class="bi bi-substack"></i></a></p>
    </article>
    
    
@endforeach

@endsection

