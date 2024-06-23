@extends('layouts.main')
@section('title', 'Livros')

@section('content')
    <nav>
        <h1>Livros Cadastrados</h1>
        <div class="buttons">
            <form action="{{ route('dashboard') }}">
                <button class="nav-buttons" type="submit">Painel</button>
            </form>
            <form action="{{ route('cadastro-livros') }}" method="get">
                <button class="nav-buttons" type="submit">Cadastrar</button>
            </form>
            <form action="{{ route('logout') }}" method="get">
                @csrf
                <button class="nav-buttons" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="table-window">
            <div class="table-livros">

            </div>
        </div>
    </div>
@endsection
