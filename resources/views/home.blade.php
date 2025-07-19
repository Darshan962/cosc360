@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Create New Post</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
@forelse ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at->format('d M Y') }}</td>
        <td>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="text-center text-muted">No posts found.</td>
    </tr>
@endforelse
        </tbody>
    </table>
@endsection
