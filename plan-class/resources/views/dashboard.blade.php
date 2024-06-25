@extends('layouts.main')
@section('title', 'Painel de Controle')

@section('content')
    <nav>
        <h1>Painel de Controle</h1>
        <div class="buttons">
            <form action="{{ route('cadastro-livros') }}" method="get">
                <button class="nav-buttons" type="submit">Cadastrar</button>
            </form>
            <a href="{{ route('profile') }}">
                <img class="nav-profile" src="/img/perfil.jpg">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="table-window">
            <div class="table-livros">
                <div>
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
                                    <td>{{ $book->edition }}°</td>
                                    <td>{{ $book->publishing_company }}</td>
                                    <td>{{ $book->year_of_publication }}</td>
                                    <td>
                                        <a href="edit/book/{{$book->id}}">
                                            <div class="buttons-edit">Editar</div>
                                        </a>
                                        <a href="{{ route('destroy', $book->id) }}">
                                            <div class="buttons-edit">Deletar</div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $books->links() }}
        </div>
    </div>
@endsection
