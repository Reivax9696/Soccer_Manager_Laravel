@extends('layouts.app')

@section('content')
    <style>
        .match-box {
            background-color: #2F855A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .score-box {
            background-color: #256F4A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .score {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
    </style>


    <div class="container">
        <div class="title-box">
            <h1 class="title">Detalls del Partit</h1>
        </div>

        <div class="match-box">
            <p>Equip 1: {{ $match->team1->name }}</p>
            <p>Equip 2: {{ $match->team2->name }}</p>
            <p>Data: {{ $match->match_date }}</p>
            <p>Població: {{ $match->location }}</p>
        </div>

        <div class="score-box">
            <p class="score">Gols per {{ $match->team1->name }}: {{ $match->score_team1 }}</p>
            <p class="score">Gols per {{ $match->team2->name }}: {{ $match->score_team2 }}</p>

            @if($match->score_team1 > $match->score_team2)
                <p class="score">El equip guanyador és: {{ $match->team1->name }}</p>
            @elseif($match->score_team1 < $match->score_team2)
                <p class="score">El equip guanyador és: {{ $match->team2->name }}</p>
            @else
                <p class="score">El partit ha acabat en empat.</p>
            @endif
        </div>


        <a href="{{ route('matches.index') }}" class="btn btn-view">Tornar a la Llista de Partits</a>
    </div>
@endsection
