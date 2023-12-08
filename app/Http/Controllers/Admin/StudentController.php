<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) // JANGAN LUPA GANTI INI JADI namespace App\Http\Controllers\Admin;
    {

        if($request->has('search')) {
            $students = Student::where('name', 'like', '%'.$request->search.'%')->orWhere('email', 'like', '%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $students = Student::paginate(5);
        }

        return view('student_list', [
            "pagetitle" => "Star Rail Simulator",

            "active_home" => "active",
            "active_character" => "active",

            "sectiontitle" => "Character List",
            "pom_logo" => "images/pom_icon.png",
            "menu_icon" => "images/chara_icon.png",

            "student_list" => $students,
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
    public function store(StoreStudentRequest $request)
    {
        Student::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'grade_number' => $request->grade_number,
            'phone' => $request->phone,
            'sosmed' => $request->sosmed,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'nationality' => $request->nationality,
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'country' => $request->country,
            'postcode' => $request->postcode,
            'photo' => $request->photo,
            'notes' => $request->note,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
