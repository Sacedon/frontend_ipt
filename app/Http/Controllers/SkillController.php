<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::orderBy('skillname')->get();

        return response()->json([
            'skills' => $skills
        ]);
    }

    public function show(Skill $skill) {
        $skill->load('skills');
        return response()->json($skill);
    }


    public function update(Skill $skill, Request $request){
        $skill->update($request->all());

        return response()->json($skill);
    }

    public function destroy(Skill $skill){
        $skill->delete();
        return response()->json(['message' => 'skill has been deleted.']);
    }

    public function store(Request $request) {
        $request->validate([
            'skillname' => 'string|required',
            'description' => 'string|required',
            'cool_down' => 'numeric|required',
            'mana_usage' => 'numeric|required',
        ]);

        $skill = Skill::create($request->all());

        return response()->json($skill);
    }

}
