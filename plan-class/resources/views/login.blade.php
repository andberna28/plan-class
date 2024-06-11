@extends('layouts.main')
@section('title', 'Login')

@section('content')
  <div class="container">
    <h1>Página de Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>
            Email:
            <input type="email" name="email" class="form-control">
        </label>
        <label>
            Senha:
            <input type="password" name="password" class="form-control">
        </label>
        <button class="btn btn-primary">Entrar</button>
        <label>
            Não tem uma conta?
            <a href="{{ route('register') }}">
                Cadastre-se
            </a>
        </label>
    </form>
  </div>
@endsection