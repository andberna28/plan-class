@extends('layouts.main')
@section('title', 'Painel de Controle')

@section('content')
    <nav>
        <h1>Sistema de Livros</h1>
        <div class="buttons">
            <form action="{{ route('livros') }}">
                <button class="nav-buttons" type="submit">Livros</button>
            </form>
            <form action="{{ route('logout') }}" method="get">
                @csrf
                <button class="nav-buttons" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="table-window">
            <div class="table-livros">
                <table>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Autor</th>
                            <th>Edição</th>
                            <th>Editora</th>
                            <th>Ano de Publicação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->subtitle }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->edition }}</td>
                                <td>{{ $book->publishing_company }}</td>
                                <td>{{ $book->year_of_publication }}</td>
                                {{-- @if (empty($book->year_of_publication))
                                    <td>{{ asset('img/semImagem.jpg') }}</td>
                                @else
                                    <td>{{ $book->book_cover }}</td>
                                @endif --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
