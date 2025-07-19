@extends('layouts.app')

@section('title', 'Create New Post')

@section('content')
    <h2>Create a New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" id="title" class="form-control" maxlength="50" required value="{{ old('title') }}">
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4">{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Is Active <span class="text-danger">*</span></label>
            <select name="is_active" id="is_active" class="form-select" required>
                <option value="Yes" {{ old('is_active') == 'Yes' ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ old('is_active') == 'No' ? 'selected' : '' }}>No</option>
            </select>
            @error('is_active')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Create Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
