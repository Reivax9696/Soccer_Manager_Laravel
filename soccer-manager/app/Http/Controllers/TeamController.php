<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        'name' => [
            'required',
            'string',
            'max:255',
            Rule::unique('teams', 'name'),
        ],
        'location' => 'required|string|max:255',
    ],[
        'name.required' => 'Es necessari introduir un nom per al equip',
        'location.required' => 'Es necessari introduir una poblacio per al partit.'
    ]);


    Teams::create($request->all());

    return redirect()->route('teams.index');
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
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('teams', 'name')->ignore($id),
            ],
            'location' => 'required|string|max:255',
        ],[
            'name.required' => 'Es necessari introduir un nom per al equip',
            'location.required' => 'Es necessari introduir una poblacio per al partit.'
        ]);

        $team = Teams::findOrFail($id);
        $team->update($request->all());

        return redirect()->route('teams.index');
    }


    public function destroy($id)
    {
        $team = Teams::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index');
    }
}
