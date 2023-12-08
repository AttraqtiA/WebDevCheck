<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Http\Requests\StoreExtracurricularRequest;
use App\Http\Requests\UpdateExtracurricularRequest;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('extrakurikuler/index', [
            "pagetitle" => "Star Rail Simulator",

            "active_home" => "active",
            "active_character" => "active",

            "sectiontitle" => "Character List",
            "pom_logo" => "images/pom_icon.png",
            "menu_icon" => "images/chara_icon.png",

            "extra_list" => Extracurricular::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('extrakurikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Extracurricular::create(
            [
                'name' => $request->name,
                'requirements' => $request->requirements,
                'price' => $request->price,
                'tutor_name' => $request->tutor_name,
            ]
        );

        return redirect()->route('extrakurikuler');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) // Extracurricular $extracurricular
    {
        $extracurricular = Extracurricular::find($id);

        // Tanpa model route binding
        // $extracurricular::find(1)->with('students_onetomany')->get();

        // Dengan model route binding
        // $extracurricular->load('students_onetomany');

        return view (
            'extrakurikuler/details',
            [

                "pom_logo" => "/images/pom_icon.png",
                "menu_icon" => "/images/chara_icon.png",

                'selected_extra' => $extracurricular
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurricular)
    {
        $extraEdit = Extracurricular::where('id', $extracurricular->id)->first();
        return view('extrakurikuler.edit', compact('extraEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExtracurricularRequest $request, Extracurricular $extracurricular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurricular)
    {
        //
    }
}
