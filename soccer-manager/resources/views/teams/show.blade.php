@extends('layouts.app')

@section('content')
<h1>Team Details</h1>
<p>Name: {{ $team->name }}</p>
<p>Location: {{ $team->location }}</p>
<a href="{{ route('teams.index') }}">Back to list</a>
@endsection
