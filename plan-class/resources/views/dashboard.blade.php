@extends('layouts.main')
@section('title', 'Painel de Controle')

@section('content')
    <nav>
        <h1>Painel de Controle</h1>
        <div class="buttons">
            <a href="{{ route('profile') }}">
                <img class="nav-profile" src="/img/perfil.jpg">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="table-window">
            <div class="table-livros">
                <div>
                    @forelse ($books as $book)
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
                            </tbody>
                        </table>
                    @empty
                        <div class="empty">
                            <p>Nenhum livro cadastrado.</p>
                            <form action="{{ route('cadastro-livros') }}" method="get">
                                <button class="cad-empty" type="submit">Cadastrar</button>
                            </form>
                        </div>
                    @endforelse
                </div>
            </div>
            {{ $books->links() }}
        </div>
    </div>
@endsection
