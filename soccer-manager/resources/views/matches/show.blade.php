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

        button[type="submit"] {
            background-color: #3B8D5A;
            color: #fff;
            border: none;
            padding: 8px 16px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #327e4a;
        }

        .match-box {
            background-color: #2F855A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }
    </style>

    <a href="{{ url('/') }}" class="btn btn-back">Tornar a la Pàgina Principal</a>

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

        <a href="{{ route('matches.index') }}" class="btn btn-view">Tornar a la Llista de Partits</a>
    </div>
@endsection
