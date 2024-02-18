<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Teams::all();
        return view('teams.index', compact('teams'));
    }


    public function create()
    {
        return view('teams.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        Teams::create($request->all());

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }


    public function show($id)
    {
        $team = Teams::findOrFail($id);
        return view('teams.show', compact('team'));
    }


    public function edit($id)
    {
        $team = Teams::findOrFail($id);
        return view('teams.edit', compact('team'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $team = Teams::findOrFail($id);
        $team->update($request->all());

        return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
    }


    public function destroy($id)
    {
        $team = Teams::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }
}
