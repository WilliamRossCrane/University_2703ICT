<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all posts with comment counts
        $posts = Post::withCount('comments')->get();

        // Pass the posts data to the 'posts.index' view
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Display the post creation form
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'message' => 'required',
        ]);

        // Create a new Post instance
        $post = new Post([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);

        // Save the new post to the database
        $post->save();

        // Redirect to the posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Find the specified post by ID
        $post = Post::findOrFail($id);

        // Pass the post data to the 'posts.edit' view (create this view if it doesn't exist)
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'message' => 'required',
        ]);

        // Find the specified post by ID
        $post = Post::findOrFail($id);

        // Update the post with the new data
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->message = $request->input('message');

        // Save the updated post to the database
        $post->save();

        // Redirect to the posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Find the specified post by ID
        $post = Post::findOrFail($id);

        // Pass the post data to the 'posts.show' view
        return view('posts.show', ['post' => $post]);
    }
}
