@extends('layouts.app')

@section('content')
<h1>Matches</h1>
<a href="{{ route('matches.create') }}">Create New Match</a>
<ul>
    @foreach ($matches as $match)
        <li>
            Match between {{ $match->team1->name }} and {{ $match->team2->name }}
            - <a href="{{ route('matches.show', $match->id) }}">View</a>
            - <a href="{{ route('matches.edit', $match->id) }}">Edit</a>
            <form action="{{ route('matches.destroy', $match->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
