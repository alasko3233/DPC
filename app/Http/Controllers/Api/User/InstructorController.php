<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
    public function index()
    {
            $instructors = User::role('instructor')->get();
            return response()->json($instructors);

    }

    public function show($id)
    {
            $instructor = User::findOrFail($id);
            return response()->json($instructor);
    }

    public function store(Request $request)
    {
            $instructor = User::create($request->all());
            $instructor->assignRole('instructor');
            return response()->json($instructor, 201);

    }

    public function update(Request $request, $id)
    {
            $instructor = User::findOrFail($id);
            $instructor->update($request->all());
            return response()->json($instructor, 200);

    }

    public function destroy($id)
    {
            $instructor = User::findOrFail($id);
            $instructor->delete();
            return response()->json(null, 204);

    }

}
