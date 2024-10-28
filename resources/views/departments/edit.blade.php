@extends('layouts.layout')

@section('title', 'Edit Department')

@section('content')
    <h1 class="mb-4">Edit Department</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $department->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $department->city) }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
