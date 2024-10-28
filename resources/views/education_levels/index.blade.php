@extends('layouts.layout')

@section('title', 'Education Levels')

@section('content')
    <h1 class="mb-4">Education Levels</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('education-levels.create') }}" class="btn btn-primary mb-3">Add New Education Level</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educationLevels as $educationLevel)
                <tr>
                    <td>{{ $educationLevel->id }}</td>
                    <td>{{ $educationLevel->description }}</td>
                    <td>
                        <a href="{{ route('education-levels.edit', $educationLevel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('education-levels.destroy', $educationLevel->id) }}" method="POST" class="d-inline">
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
