<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $data = Student::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nick'                  =>  'required', 
            'pet_name'              =>  'required',
            'race'                  =>  'required',
            'Age'                   =>  'required',
            'student_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'pet_gender'            =>  'required',
            'Color'                 =>  'required',
            'Human_name'            =>  'required',
            'Phone'                 =>  'required'
        ]);

        $file_name = time() . '.' . request()->student_image->getClientOriginalExtension();

        request()->student_image->move(public_path('images'), $file_name);

        $student = new Student;

        $student->nick = $request->nick;
        $student->pet_name = $request->pet_name;
        $student->race = $request->race;
        $student->Age = $request->Age;
        $student->pet_gender = $request->pet_gender;
        $student->Color = $request->Color;
        $student->Human_name = $request->Human_name;
        $student->Phone = $request->Phone;
        $student->student_image = $file_name;

        $student->save();

        return redirect()->route('students.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('show', compact('student'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student Data deleted successfully');
    }
}