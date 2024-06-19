@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <nav>
        <h1>Sistema de Livros</h1>
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <button class="logout" type="submit">Sair</button>
        </form>
    </nav>
@endsection
