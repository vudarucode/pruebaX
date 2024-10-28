@extends('layouts.layout')

@section('title', 'Report of Employees by Department Salary')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Report: Employees with Department Salary Over 250,000</h1>

        @if ($report->isEmpty())
            <div class="alert alert-warning" role="alert">
                No records found that meet the criteria.
            </div>
        @else
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Last Name</th>
                        <th>Education Level</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($report as $employee)
                        <tr>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->educationLevel->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
