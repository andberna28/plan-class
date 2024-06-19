@extends('layouts.main')
@section('title', 'Cadastro')

@section('content')
    <nav>
        <h1>Sistema de Livros</h1>
    </nav>
    <div class="container">
        <div class="container-error">
            @if ($errors->any())
                @foreach ($errors->all() as $erro)
                    <div class="error">
                        {{ $erro }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="div-cadastro">
            <h1>Página de Cadastro</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label>
                    Nome:
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </label>
                <label>
                    Email:
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </label>
                <label>
                    Senha:
                    <input type="password" name="password" class="form-control">
                </label>
                <label>
                    Confirmar senha:
                    <input type="password" name="password_confirmation" class="form-control">
                </label>
                <button class="btn-conta">Cadastrar</button>
                <label>
                    Já tem uma conta?
                    <a href="{{ route('login') }}">
                        Faça login
                    </a>
                </label>
            </form>
        </div>
    </div>
@endsection
