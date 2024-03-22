@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <img src="{{ $image}}" alt="{{ $nama}}">

    <ul>
        <li><h3>{{ $nama }}</h3></li>
        <li><h3>{{ $email }}</h3></li>
    </ul>
@endsection