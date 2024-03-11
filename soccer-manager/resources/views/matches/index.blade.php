@extends('layouts.app')

@section('content')
    <style>
        .btn-create {
            background-color: #3B8D5A;
            margin-bottom: 16px;
        }

        .btn-create:hover {
            background-color: #327e4a;
        }

    </style>

    <a href="{{ url('/') }}" class="btn btn-back">Tornar a la Pàgina Principal</a>

    <a href="{{ route('teams.index') }}" class="btn btn-teams">Veure Equips</a>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Partits</h1>
    </div>

        <a href="{{ route('matches.create') }}" class="btn btn-create">Crear un Nou Partit</a>

    @foreach ($matches as $match)
        <div class="box match-box">
            <div class="match-details">
                <p class="match-teams">Partit entre {{ $match->team1->name }} i {{ $match->team2->name }}</p>
            </div>
            <div>
                <a href="{{ route('matches.show', $match->id) }}" class="btn btn-view">Més Informació</a>
                <a href="{{ route('matches.edit', $match->id) }}" class="btn btn-edit">Editar</a>
                <form action="{{ route('matches.destroy', $match->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Estàs segur que vols borrar aquest partit?')">Borrar</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>
    @endsection
