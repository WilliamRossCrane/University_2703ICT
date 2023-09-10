@extends('layouts.app')

@section('title', 'Greeting Result')

@section('content')
    <p>Hello {{ htmlspecialchars($name) }}. Next year, you will be {{ (int)$age + 1 }} years old.</p>
    <hr>
    <p><a href="{{ route('source') }}">Source</a></p>
@endsection
