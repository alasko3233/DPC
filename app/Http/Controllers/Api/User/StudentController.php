<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::role('student')->get();
        return response()->json($students);
    }

    public function show($id)
    {
        $student = User::findOrFail($id);
        return response()->json($student);
    }

    public function store(Request $request)
    {
        $student = User::create($request->all());
        $student->assignRole('student');
        return response()->json($student, 201);
    }

    public function update(Request $request, $id)
    {
        $student = User::findOrFail($id);
        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function destroy($id)
    {
        $student = User::findOrFail($id);
        $student->delete();
        return response()->json(null, 204);
    }
}
