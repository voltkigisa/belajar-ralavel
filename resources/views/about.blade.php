@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <img src="{{ $image}}" alt="{{ $name}}" class="img-tumbnail rounded-circle">

    <ul>
        <li><h3>{{ $name }}</h3></li>
        <li><h3>{{ $email }}</h3></li>
    </ul>
@endsection