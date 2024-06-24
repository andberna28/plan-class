@extends('layouts.main')
@section('title', 'Perfil')

@section('content')
    <nav>
        <h1>Seu Perfil</h1>
        <div class="buttons">
            <form action="{{ route('dashboard') }}">
                <button class="nav-buttons" type="submit">Painel</button>
            </form>
            <form action="{{ route('cadastro-livros') }}" method="get">
                <button class="nav-buttons" type="submit">Cadastrar</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="table-window">
            <div class="profile-content">
                <img class="foto-perfil" src="/img/perfil.jpg">
                <h1>Nome:</h1>
                <h2>Email:</h2>
                <form action="{{ route('logout') }}" method="get">
                    @csrf
                    <button class="nav-buttons" type="submit">Sair</button>
                </form>
            </div>
        </div>
    </div>
@endsection
