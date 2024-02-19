@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #34D399;
            color: #fff;
            font-family: 'sans-serif';
            padding: 8px;
            text-align: center;
        }

        .container {
            margin: 0 auto;
            max-width: 32rem;
        }

        .box {
            background-color: #2F855A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .title-box {
            background-color: #256F4A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            border-radius: 4px;
            margin-top: 8px;
            transition: background-color 0.3s;
        }

        .btn-view {
            background-color: #3B8D5A;
        }

        .btn-view:hover {
            background-color: #327e4a;
        }

        .btn-edit {
            background-color: #3B8D5A;
        }

        .btn-edit:hover {
            background-color: #327e4a;
        }

        .btn-delete {
            background-color: #E53E3E;
        }

        .btn-delete:hover {
            background-color: #c53030;
        }

        .btn-back {
            position: absolute;
            top: 8px;
            left: 8px;
            background-color: #256F4A;
            border: none;
            color: #fff;
            padding: 8px 16px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #205c41;
        }

        .btn-create {
            background-color: #3B8D5A;
            margin-bottom: 16px;
        }

        .btn-create:hover {
            background-color: #327e4a;
        }

        .match-box {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .match-details {
            margin-bottom: 16px;
        }

        .match-teams {
            font-size: 18px;
            margin-bottom: 8px;
        }
    </style>

    <a href="{{ url('/') }}" class="btn btn-back">Tornar a la Pàgina Principal</a>

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
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Estàs segur que vols borrar aquest equip?')">Borrar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
