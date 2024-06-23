@extends('layouts.main')
@section('title', 'Painel de Controle')

@section('content')
    <nav>
        <h1>Painel de Controle</h1>
        <div class="buttons">
            <form action="{{ route('livros') }}">
                <button class="nav-buttons" type="submit">Livros</button>
            </form>
            <form action="{{ route('cadastro-livros') }}" method="get">
                <button class="nav-buttons" type="submit">Cadastrar</button>
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
                                    <td>{{ $book->edition }}</td>
                                    <td>{{ $book->publishing_company }}</td>
                                    <td>{{ $book->year_of_publication }}</td>
                                    {{-- @if (empty($book->year_of_publication))
                                        <td>{{ asset('img/semImagem.jpg') }}</td>
                                    @else
                                        <td>{{ $book->book_cover }}</td>
                                    @endif --}}
                                    <td>
                                        <a href="edit/book/{{$book->id}}">
                                            <div class="preto">Editar</div>
                                        </a>
                                        <form action="{{ route('destroy', $book->id) }}" method="get">
                                            <button class="" type="submit">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
