@extends('layouts.main')
@section('title', 'Perfil')

@section('content')
    <nav>
        <h1>Seu Perfil</h1>
        <div class="buttons">
            <form action="{{ route('dashboard') }}">
                <button class="nav-buttons" type="submit">Painel</button>
            </form>
            <form action="{{ route('logout') }}" method="get">
                @csrf
                <button class="nav-buttons" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="table-window">
            <div class="profile-content">
                <img class="foto-perfil" src="/img/perfil.jpg">
                <div>
                    <h2>Nome: {{ Auth::user()->name }}</h2>
                    <h2>Email: {{ Auth::user()->email }}</h2>
                </div>
                <form action="{{ route('logout') }}" method="get">
                    @csrf
                    <button class="logout" type="submit">Sair</button>
                </form>
            </div>
        </div>
    </div>
@endsection
