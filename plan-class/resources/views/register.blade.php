@extends('layouts.main')
@section('title', 'Cadastro')

@section('content')
    <div class="container">
        <h1>Página de Cadastro</h1>
        <form action="" method="POST">
            <label>
                Nome:
                <input type="text" name="name" class="form-control">
            </label>
            <label>
                Email:
                <input type="email" name="email" class="form-control">
            </label>
            <label>
                Senha:
                <input type="password" name="password" class="form-control">
            </label>
            <label>
                Confirmar senha:
                <input type="password" name="password_confirmation" class="form-control">
            </label>
            <button class="btn btn-primary">Cadastrar</button>
            
            <label>
                <a href="">
                    Já tem uma conta?
                </a>
            </label>
        </form>
    </div>
@endsection