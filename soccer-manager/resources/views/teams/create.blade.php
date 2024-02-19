
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
    </style>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Crear un Nou Equip</h1>
        </div>

        <div class="box form-box">
            <form action="{{ route('teams.store') }}" method="POST">
                @csrf
                <label for="name" class="label">Nom:</label>
                <input type="text" name="name" id="name" class="input" required>
                <label for="location" class="label">Població:</label>
                <input type="text" name="location" id="location" class="input">
                <button type="submit" class="btn">Crear Equip</button>
            </form>
        </div>
    </div>
@endsection
