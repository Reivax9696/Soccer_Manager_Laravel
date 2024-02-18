@extends('layouts.app')

@section('content')
<h1>Edit Team</h1>
<form action="{{ route('teams.update', $team->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $team->name }}" required>
    <label for="location">Location:</label>
    <input type="text" name="location" id="location" value="{{ $team->location }}">
    <button type="submit">Update Team</button>
</form>
@endsection
