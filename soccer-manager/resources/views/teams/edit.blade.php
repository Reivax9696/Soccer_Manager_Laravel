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

        .form-box {
            background-color: #256F4A;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .input {
            padding: 8px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 16px;
            border: 1px solid #fff;
            border-radius: 4px;
            background-color: transparent;
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
    </style>

    <a href="{{ url('teams') }}" class="btn btn-back">Tornar al Llistat de Equips</a>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Editar Equip</h1>
        </div>

        <div class="box form-box">
            <form action="{{ route('teams.update', $team->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name" class="label">Nom:</label>
                <input type="text" name="name" id="name" value="{{ $team->name }}" class="input" required>
                <label for="location" class="label">Població:</label>
                <input type="text" name="location" id="location" value="{{ $team->location }}" class="input">
                <button type="submit" class="btn">Actualitzar Equip</button>
            </form>
        </div>
    </div>
@endsection
