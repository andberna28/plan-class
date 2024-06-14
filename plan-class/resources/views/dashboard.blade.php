@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <form action="{{ route('logout') }}" method="get">
        @csrf
        <button type="submit">Sair</button>
    </form>
@endsection
