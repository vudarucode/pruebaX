<?php

namespace App\Http\Controllers;

use App\Models\EducationLevel;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    public function index()
    {
        $educationLevels = EducationLevel::all();
        return view('education_levels.index', compact('educationLevels'));
    }

    public function create()
    {
        return view('education_levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        EducationLevel::create($request->all());
        return redirect()->route('education-levels.index')->with('success', 'Education level created successfully.');
    }

    public function show(EducationLevel $educationLevel)
    {
        return view('education_levels.show', compact('educationLevel'));
    }

    public function edit(EducationLevel $educationLevel)
    {
        return view('education_levels.edit', compact('educationLevel'));
    }

    public function update(Request $request, EducationLevel $educationLevel)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $educationLevel->update($request->all());
        return redirect()->route('education-levels.index')->with('success', 'Education level updated successfully.');
    }

    public function destroy(EducationLevel $educationLevel)
    {
        $educationLevel->delete();
        return redirect()->route('education-levels.index')->with('success', 'Education level deleted successfully.');
    }
}
