@extends('layouts.main')
@section('title', 'Login')

@section('content')
    <nav>
        <h1>Sistema de Livros</h1>
    </nav>
    <div class="container">
        <div class="container-error">
            @if(session('error'))
                <div class="error">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="div-login">
            <h1>Página de Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label>
                    Email:
                    <input id="other-inputs" type="email" name="email" class="form-control">
                </label>
                <label>
                    Senha:
                    <input id="other-inputs" type="password" name="password" class="form-control">
                </label>
                <button class="btn-conta">Entrar</button>
                <label>
                    Não tem uma conta?
                    <a href="{{ route('register') }}">
                        Cadastre-se
                    </a>
                </label>
            </form>
        </div>
    </div>
@endsection
