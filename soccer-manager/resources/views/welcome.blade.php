@extends('layouts.app')

@section('content')
    <style>
        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            background-color: #3B8D5A;
            color: #fff;
            border-radius: 4px;
            margin: 8px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #327e4a;
        }
    </style>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Aplicació de Control de la Lliga de Fútbol</h1>
        </div>

        <div class="box">
            <p class="mb-4">Escolleix una opció:</p>
            <a href="{{ route('teams.index') }}" class="btn">Veure Equips</a>
            <a href="{{ route('matches.index') }}" class="btn">Veure Partits</a>
        </div>
    </div>
@endsection
