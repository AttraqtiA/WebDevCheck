<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentExtraPivot;
use App\Http\Requests\StoreStudentExtraPivotRequest;
use App\Http\Requests\UpdateStudentExtraPivotRequest;

class StudentExtraPivotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('relation', [
            "pagetitle" => "Star Rail Simulator",

            "active_home" => "active",
            "active_character" => "active",

            "sectiontitle" => "Character List",
            "pom_logo" => "images/pom_icon.png",
            "menu_icon" => "images/chara_icon.png",

            "relation_list" => StudentExtraPivot::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentExtraPivotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentExtraPivot $studentExtraPivot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentExtraPivot $studentExtraPivot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentExtraPivotRequest $request, StudentExtraPivot $studentExtraPivot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentExtraPivot $studentExtraPivot)
    {
        //
    }
}
