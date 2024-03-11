@extends('layouts.app')

@section('content')
    <style>

        .details-box {
            background-color: #256F4A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .details-label {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .details-text {
            font-size: 16px;
            color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            background-color: #3B8D5A;
            color: #fff;
            border-radius: 4px;
            margin-top: 8px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #327e4a;
        }

    </style>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Detalls del Equip</h1>
        </div>

        <div class="box details-box">
            <p class="details-label">Nom:</p>
            <p class="details-text">{{ $team->name }}</p>
            <p class="details-label">Població:</p>
            <p class="details-text">{{ $team->location }}</p>
            <a href="{{ route('teams.index') }}" class="btn">Tornar all llistat de Equips</a>
        </div>
    </div>
@endsection
