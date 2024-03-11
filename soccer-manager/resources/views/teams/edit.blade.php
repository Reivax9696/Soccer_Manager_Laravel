@extends('layouts.app')

@section('content')
    <style>
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

    </style>

    <a href="{{ url('teams') }}" class="btn btn-back">Tornar al Llistat de Equips</a>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Editar Equip</h1>
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


    <div class="box form-box">
        <form action="{{ route('teams.update', $team->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name" class="label">Nom:</label>
            <input type="text" name="name" id="name" value="{{ $team->name }}" class="input">
            <label for="location" class="label">Població:</label>
            <input type="text" name="location" id="location" value="{{ $team->location }}" class="input">
            <button type="submit" class="btn">Actualitzar Equip</button>
        </form>
     </div>
   </div>
@endsection
