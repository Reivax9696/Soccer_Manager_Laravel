@extends('layouts.app')

@section('content')

    <a href="{{ url('matches') }}" class="btn btn-back">Tornar al Llistat de Partits</a>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Editar Partit</h1>
    </div>

    @if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('matches.update', $match->id) }}" method="POST" class="form-box">

        @csrf
        @method('PUT')


        <label for="team1_id">Equip 1:</label>
        <select name="team1_id" id="team1_id" required>
             @foreach ($teams as $team)
                <option value="{{ $team->id }}" {{ $match->team1_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
             @endforeach
        </select>

        <label for="score_team1">Gols Equip 1:</label>
        <input type="number" name="score_team1" id="score_team1" class="score-input" min="0" value="{{ $match->score_team1 }}" required>

        <label for="team2_id">Equip 2:</label>
        <select name="team2_id" id="team2_id" required>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}" {{ $match->team2_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
            @endforeach
        </select>

        <label for="score_team2">Gols Equip 2:</label>
        <input type="number" name="score_team2" id="score_team2" class="score-input" min="0" value="{{ $match->score_team2 }}" required>

        <label for="match_date">Data del Partit:</label>
        <input type="datetime-local" name="match_date" id="match_date" value="{{ \Carbon\Carbon::parse($match->match_date)->format('Y-m-d\TH:i') }}" required>

        <label for="location">Població:</label>
        <input type="text" name="location" id="location" value="{{ $match->location }}">

        <button type="submit" class="btn btn-update">Actualitzar Partit</button>
    </form>
    </div>
    @endsection
