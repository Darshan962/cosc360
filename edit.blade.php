@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required maxlength="50">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="4" class="form-control">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Is Active</label>
            <select name="is_active" id="is_active" class="form-select">
                <option value="Yes" {{ old('is_active', $post->is_active) == 'Yes' ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ old('is_active', $post->is_active) == 'No' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
