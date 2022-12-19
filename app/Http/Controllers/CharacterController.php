<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(){
        $characters = Character::orderBy('charactersname')->get();

        return response()->json([
            'characters' => $characters
        ]);
    }

    public function show(Character $character) {
        $character->load('characters');
        return response()->json($character);
    }

    public function store(Request $request) {
        $request->validate([
            'charactersname' => 'string|required',
            'role' => 'string|required',
            'hero_class' => 'string|required',
        ]);



        $character = Character::create($request->all());

        return response()->json($character);
    }

    public function update(Character $character, Request $request){
        $character->update($request->all());

        return response()->json($character);
    }

    public function destroy(Character $character){
        $character->delete();
        return response()->json(['message' => 'character has been deleted.']);
    }
}
