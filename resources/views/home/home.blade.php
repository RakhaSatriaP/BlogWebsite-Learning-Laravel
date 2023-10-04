@extends('layouts/main')
@section('container')
<div class="container-fluid p-0">
    <div>
        <img src="https://source.unsplash.com/1000x600?Article" alt="x" class="w-100">
    </div>
</div>
@endsection

{{-- Category::create([
    'name' => 'Web Programming',
    'slug' => 'web-programming'
])

Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
]) --}}

{{-- Post::create([
    'category_id' => 1,
    'title' => 'Judul empat',
    'author' => 'Rillo Raihan',
    'slug' => 'judul-empat',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
    
])

Post::create([
    'category_id' => 2,
    'title' => 'Judul Kedua',
    'author' => 'M. Iqbal Fauzi',
    'slug' => 'judul-kedua',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
])

Post::create([
    'category_id' => 3,
    'title' => 'Judul Ketiga',
    'author' => 'Rakha Satria',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
]) --}}

