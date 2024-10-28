@extends('layouts.layout')

@section('title', 'Add Education Level')

@section('content')
    <h1 class="mb-4">Add New Education Level</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('education-levels.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('education-levels.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
