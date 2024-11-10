<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id', 'asc')->paginate(5);
        return view('pages.student', ['models' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('pages.create.student-create', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'tel' => 'required|max:255',
            'address' => 'required|max:255',

        ]);
        $data = $request->all();

        Student::create($data);
        return redirect('/students')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('pages.show.student-show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('pages.update.student-update', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|max:255',
            'tel' => 'required|max:255',
            'address' => 'required|max:255',

        ]);
        $data = $request->all();

        $student->update($data);
        return redirect('/students')->with('warning', 'Ma\'lumot yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}
