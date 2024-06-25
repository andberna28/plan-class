@extends('layouts.main')
@section('title', 'Editar Livro')

@section('content')
    <nav>
        <h1>Editar Livro</h1>
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
            <form action="{{ route('update', $book->id) }}" method="POST">
                @csrf
                <label>
                    Título:
                    <input value="{{ $book->title }}" id="other-inputs" type="text" name="title" class="form-control">
                </label>
                <label>
                    Subtítulo:
                    <input value="{{ $book->subtitle }}" id="other-inputs" type="text" name="subtitle" class="form-control">
                </label>
                <label>
                    Autor:
                    <input value="{{ $book->author }}" id="other-inputs" type="text" name="author" class="form-control">
                </label>
                <label>
                    Edição:
                    <input value="{{ $book->edition }}" id="other-inputs" type="number" name="edition" class="form-control">
                </label>
                <label>
                    Editora:
                    <input value="{{ $book->publishing_company }}" id="other-inputs" type="text" name="publishing_company" class="form-control">
                </label>
                <label>
                    Ano de publicação:
                    <input value="{{ $book->year_of_publication }}" id="other-inputs" type="number" max="2024" name="year_of_publication" class="form-control">
                </label>
                <button class="nav-buttons">Concluir Alterações</button>
            </form>
        </div>
    </div>

@endsection
