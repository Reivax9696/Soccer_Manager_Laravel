
@extends('layouts.app')

@section('content')

    <a href="{{ url('teams') }}" class="btn btn-back">Tornar al Llistat de Equips</a>

    <div class="container">
        <div class="title-box">
            <h1 class="title">Crear un Nou Equip</h1>
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
            <form action="{{ route('teams.store') }}" method="POST">
                @csrf
                <label for="name" class="label">Nom:</label>
                <input type="text" name="name" id="name" class="input">
                <label for="location" class="label">Població:</label>
                <input type="text" name="location" id="location" class="input">
                <button type="submit" class="btn">Crear Equip</button>
            </form>
        </div>
    </div>
@endsection
