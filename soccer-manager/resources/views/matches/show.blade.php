@extends('layouts.app')

@section('content')
<h1>Match Details</h1>
<p>Team 1: {{ $match->team1->name }}</p>
<p>Team 2: {{ $match->team2->name }}</p>
<p>Match Date: {{ $match->match_date }}</p>
<p>Location: {{ $match->location }}</p>
<a href="{{ route('matches.index') }}">Back to list</a>
@endsection
