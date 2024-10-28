@extends('layouts.layout')

@section('title', 'Employees')

@section('content')
    <h1 class="mb-4">Employees</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add New Employee</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Education Level</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->department->name }}</td>
                    <td>{{ $employee->educationLevel->description }}</td>
                    <td>${{ number_format($employee->salary, 2) }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
