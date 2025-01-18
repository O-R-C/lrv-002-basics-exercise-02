<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        // dd($group);
        return view('students.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'group_id' => 'required|exists:groups,id',
        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->surname = $request->input('surname');
        $student->group_id = $request->input('group_id');
        $student->save();

        return redirect()->route('groups.show', $request->input('group_id'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student, Group $group)
    {
        // dd(vars: $group);
        return view('students.show', compact('student', 'group'));
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
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student = Student::find($student->id);
        if ($student) {
            $student->delete();
        }
        return redirect()->route('groups.index');
    }
}
