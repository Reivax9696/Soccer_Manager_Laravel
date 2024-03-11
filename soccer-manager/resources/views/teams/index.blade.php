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

    <a href="{{ route('matches.index') }}" class="btn btn-matches">Veure Partits</a>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Equips</h1>
        </div>

        <a href="{{ route('teams.create') }}" class="btn btn-create">Crear un Nou Equip</a>



        @foreach ($teams as $team)
            <div class="box match-box">
                <div class="match-details">
                    <p class="match-teams">{{ $team->name }} - {{ $team->location }}</p>
                </div>
                <div>
                    <a href="{{ route('teams.show', $team->id) }}" class="btn btn-view">Mès Informació</a>
                    <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-edit">Editar</a>
                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Estàs segur que vols borrar aquest equip? Aquesta acció també eliminarà tots els partits associats.')">Borrar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
