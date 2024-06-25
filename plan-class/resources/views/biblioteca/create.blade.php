@extends('layouts.main')
@section('title', 'Cadastrar Livros')

@section('content')
    <nav>
        <h1>Cadastrar Livros</h1>
        <div class="buttons">
            <form action="{{ route('dashboard') }}">
                <button class="nav-buttons" type="submit">Painel</button>
            </form>
            <a href="{{ route('profile') }}">
                <img class="nav-profile" src="/img/perfil.jpg">
            </a>
        </div>
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
        <div class="cadastro-livros">
            <h1>Informações:</h1>
            <form action="{{ route('register-books') }}" method="POST">
                @csrf
                <label>
                    Título:
                    <input id="other-inputs" type="text" name="title" class="form-control" placeholder="Ex: Harry Potter">
                </label>
                <label>
                    Subtítulo:
                    <input id="other-inputs" type="text" name="subtitle" class="form-control" placeholder="Ex: e o Prisioneiro de Azkaban">
                </label>
                <label>
                    Autor:
                    <input id="other-inputs" type="text" name="author" class="form-control" placeholder="Ex: J. K. Rowling">
                </label>
                <label>
                    Edição:
                    <input id="other-inputs" type="number" name="edition" class="form-control" placeholder="Apenas números">
                </label>
                <label>
                    Editora:
                    <input id="other-inputs" type="text" name="publishing_company" class="form-control" placeholder="Ex: Editora Rocco">
                </label>
                <label>
                    Ano de publicação:
                    <input id="other-inputs" type="number" max="2024" name="year_of_publication" class="form-control" placeholder="Ex: 2024">
                </label>
                <button class="btn-conta">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection
