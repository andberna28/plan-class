@extends('layouts.main')
@section('title', 'Cadastrar Livros')

@section('content')
    <nav>
        <h1>Cadastrar Livros</h1>
        <div class="buttons">
            <form action="{{ route('livros') }}">
                <button class="nav-buttons" type="submit">Livros</button>
            </form>
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
        <div class="cadastro-livros">
            <h1>Informações:</h1>
            <form action="{{ route('update', $book->id) }}" method="POST">
                @csrf
                <label>
                    Título:
                    <input id="other-inputs" type="text" name="title" class="form-control">
                </label>
                <label>
                    Subtítulo:
                    <input id="other-inputs" type="text" name="subtitle" class="form-control">
                </label>
                <label>
                    Autor:
                    <input id="other-inputs" type="text" name="author" class="form-control">
                </label>
                <label>
                    Edição:
                    <input id="other-inputs" type="number" name="edition" class="form-control">
                </label>
                <label>
                    Editora:
                    <input id="other-inputs" type="text" name="publishing_company" class="form-control">
                </label>
                <label>
                    Ano de publicação:
                    <input id="other-inputs" type="number" name="year_of_publication" class="form-control">
                </label>
                <label>
                    Capa:
                    <input type="file" name="book_cover" accept="mimes" class="form-control">
                </label>
                <button class="btn-conta">Concluir Alterações</button>
            </form>
        </div>
    </div>

@endsection
