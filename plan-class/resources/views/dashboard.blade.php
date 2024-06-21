@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <nav>
        <h1>Sistema de Livros</h1>
        <div class="buttons">
            <form action="{{ route('logout') }}" method="get">
                @csrf
                <button class="logout" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="dashboard">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Subtítulo</th>
                        <th>Autor</th>
                        <th>Edição</th>
                        <th>Editora</th>
                        <th>Ano de Publicação</th>
                        <th>Capa do livro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th>{{ $book->title }}</th>
                            <th>{{ $book->subtitle }}</th>
                            <th>{{ $book->author }}</th>
                            <th>{{ $book->edition }}</th>
                            <th>{{ $book->publishing_company }}</th>
                            <th>{{ $book->year_of_publication }}</th>
                            @if (empty($book->year_of_publication))
                                <th>{{ asset('img/semImagem.jpg') }}</th>
                            @else
                                <th>{{ $book->book_cover }}</th>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
