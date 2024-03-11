<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\Teams;
use Illuminate\Support\Facades\Session;

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
              'team1_id' => [
                  'required',
                  'exists:teams,id',
                  function ($attribute, $value, $fail) use ($request) {
                      $otherTeamId = $request->input('team2_id');
                      if ($value == $otherTeamId) {
                          $fail('Els equips han de ser diferents.');
                      }
                  },
              ],
              'team2_id' => 'required|exists:teams,id',
              'match_date' => 'required|date',
              'location' => 'required|string',
              'score_team1' => 'required|integer',
              'score_team2' => 'required|integer',
          ],
          [
            'location.required' => 'És necessari introduir una ubicació per al partit.'
        ]);



          Matches::create($request->all());

          return redirect()->route('matches.index');
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
             'team1_id' => [
                'required',
                'exists:teams,id',
                function ($attribute, $value, $fail) use ($request, $match) {
                     $otherTeamId = $request->input('team2_id');
                     if ($value == $otherTeamId) {
                         $fail('Els equips han de ser diferents.');
                     }
                },
             ],
             'team2_id' => 'required|exists:teams,id',
             'match_date' => 'required|date',
             'location' => 'required|string',
             'score_team1' => 'required|integer',
             'score_team2' => 'required|integer',
            ],
            [
                'location.required' => 'És necessari introduir una ubicació per al partit.'

            ]);



    $match->update($request->all());

    return redirect()->route('matches.index');


}


      public function destroy(Matches $match)
      {
          $match->delete();
          return redirect()->route('matches.index');
      }
}
