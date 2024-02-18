@extends('layouts.app')

@section('content')
<h1>Create New Team</h1>
<form action="{{ route('teams.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="location">Location:</label>
    <input type="text" name="location" id="location">
    <button type="submit">Create Team</button>
</form>
@endsection
