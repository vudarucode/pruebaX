@extends('layouts.layout')

@section('title', 'Add Employee')

@section('content')
    <h1 class="mb-4">Add New Employee</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="department_id" class="form-label">Department</label>
            <select class="form-control" id="department_id" name="department_id" required>
                <option value="" disabled selected>Select a department</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="education_level_id" class="form-label">Education Level</label>
            <select class="form-control" id="education_level_id" name="education_level_id" required>
                <option value="" disabled selected>Select an education level</option>
                @foreach($educationLevels as $educationLevel)
                    <option value="{{ $educationLevel->id }}" {{ old('education_level_id') == $educationLevel->id ? 'selected' : '' }}>
                        {{ $educationLevel->description }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" class="form-control" id="salary" name="salary" value="{{ old('salary') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
