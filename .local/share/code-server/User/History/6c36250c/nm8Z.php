<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display listing of posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve posts with comment counts
        $posts = Post::withCount('comments')->get();
        // Pass posts data to the 'posts.index' view
        return view('posts.index', ['posts' => $posts]);
    }
    /**
     * Show form for creating a new post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Display post creation form
        return view('posts.create');
    }
    /**
     * Store newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'message' => 'required',
        ]);
        // Create new Post instance
        $post = new Post([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);
        // Save post to the database
        $post->save();
        // Redirect to posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    /**
     * Show form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Find specified post by ID
        $post = Post::findOrFail($id);
        // Pass the post data to the 'posts.edit' view (
        return view('posts.edit', ['post' => $post]);
    }
    /**
     * Update specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request data for updating a post
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'message' => 'required',
        ]);
        // Find specified post by ID
        $post = Post::findOrFail($id);
        // Update post with the new data
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->message = $request->input('message');
        // Save updated post to the database
        $post->save();
        // Redirect to posts index with success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
    /**
     * Display specified post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Find specified post by ID
        $post = Post::findOrFail($id);
        // Pass post data to the 'posts.show' view
        return view('posts.show', ['post' => $post]);
    }
}
