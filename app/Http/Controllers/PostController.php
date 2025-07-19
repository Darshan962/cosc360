<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Show create post form
    public function create()
    {
        return view('posts.create');
    }

    // Save new post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'content' => 'nullable',
            'is_active' => 'required|in:Yes,No'
        ]);

        Post::create($validated);

        return redirect('/all')->with('success', 'Post created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    // Save edited post
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'content' => 'nullable',
            'is_active' => 'required|in:Yes,No'
        ]);

        $post = Post::findOrFail($id);
        $post->update($validated);

        return redirect('/all')->with('success', 'Post updated successfully!');
    }

    // Delete post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/all')->with('success', 'Post deleted!');
    }
}
