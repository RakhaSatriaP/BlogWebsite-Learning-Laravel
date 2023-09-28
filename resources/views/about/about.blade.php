@extends('layouts.main')
@section('container')

<h1>Ini Adalah About</h1>
<h3>Nama Adalah : {{ $name }}</h3> 
<h3>Email Adalah : {{ $email }}</h3>
<div cl
class="rounded-circle">
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded">
</div>

@endsection
