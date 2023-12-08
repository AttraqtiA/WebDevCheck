<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
    return view('index', [
        "pagetitle" => "Star Rail Simulator",

        "active_home" =>  "active",
        "active_character" => "active",

        "sectiontitle" => "Character List",
        "pom_logo" => "images/pom_icon.png",
        "menu_icon" => "images/chara_icon.png",

        "character_list" => Character::all(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        // DB::table('characters')->insert([
        //     'name' => 'Topaz and Numby',
        //     'path'=> 'Hunt',
        //     'rarity' => "5*"
        // ]);

        Character::create([
            'name' => $request->name,
            'path' => $request->path,
            'rarity' => $request->rarity
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Character $find_chara)
    {
        // $find_chara = Character::find($name);

        return view (
            'character_details',
            [

                "sectiontitle" => $find_chara,
                "pom_logo" => "/images/pom_icon.png",
                "menu_icon" => "/images/chara_icon.png",

                // 'selected_character' => Character::where('name', $name)->first()

                'selected_character' => $find_chara
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        Character::find($character->id)->update([
            'name' => $request->name,
            'path' => $request->path,
            'rarity' => $request->rarity
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        Character::find($character->id)->delete();
    }
}
