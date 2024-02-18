<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\Teams;

class MatchController extends Controller
{

      public function index()
      {
          $matches = Matches::with(['team1', 'team2'])->get();
          return view('matches.index', compact('matches'));
      }


      public function create()
      {
          $teams = Teams::all();
          return view('matches.create', compact('teams'));
      }


      public function store(Request $request)
      {
          $request->validate([
              'team1_id' => 'required|exists:teams,id',
              'team2_id' => 'required|exists:teams,id',
              'match_date' => 'required|date',
              'location' => 'nullable|string',

          ]);

          Matches::create($request->all());
          return redirect()->route('matches.index')->with('success', 'Match created successfully.');
      }


      public function show(Matches $match)
      {
          return view('matches.show', compact('match'));
      }


      public function edit(Matches $match)
      {
          $teams = Teams::all();
          return view('matches.edit', compact('match', 'teams'));
      }

      public function update(Request $request, Matches $match)
      {
          $request->validate([
              'team1_id' => 'required|exists:teams,id',
              'team2_id' => 'required|exists:teams,id',
              'match_date' => 'required|date',
              'location' => 'nullable|string',

          ]);

          $match->update($request->all());
          return redirect()->route('matches.index')->with('success', 'Match updated successfully.');
      }


      public function destroy(Matches $match)
      {
          $match->delete();
          return redirect()->route('matches.index')->with('success', 'Match deleted successfully.');
      }
}
