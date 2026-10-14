@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
    <h1>Aprendices</h1>

    <p>El módulo de aprendices está funcionando.</p>

    <a href="{{ route('aprendices.create') }}">
        + Nuevo aprendiz
    </a>
@endsection