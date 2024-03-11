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
            margin-top: 16px;
        }

        .btn-create:hover {
            background-color: #327e4a;
        }

        .form-box {
            background-color: #256F4A;
            border-radius: 8px;
            padding: 16px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 18px;
            font-weight: bold;
        }

        select,
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            font-size: 16px;
            border: 1px solid #fff;
            border-radius: 4px;
            background-color: #2F855A;
            color: #fff;
        }

        button {
            background-color: #3B8D5A;
            color: #fff;
            border: none;
            padding: 8px 16px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #327e4a;
        }

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
