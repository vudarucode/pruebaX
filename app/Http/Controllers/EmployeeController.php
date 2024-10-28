<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EducationLevel;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['department', 'educationLevel'])->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        $educationLevels = EducationLevel::all();
        return view('employees.create', compact('departments', 'educationLevels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'department_id' => 'required|exists:ds_departments,id',
            'education_level_id' => 'required|exists:ds_education_levels,id',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $educationLevels = EducationLevel::all();
        return view('employees.edit', compact('employee', 'departments', 'educationLevels'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'department_id' => 'required|exists:ds_departments,id',
            'education_level_id' => 'required|exists:ds_education_levels,id',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
