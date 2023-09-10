<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts
        return view('posts.index', ['posts' => $posts]); // Assuming you have an 'index.blade.php' view for listing posts
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create'); // Assuming you have a 'create.blade.php' view for creating posts
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate input data using Laravel's validation rules
        $request->validate([
            'title' => 'required|max:255', // Title is required and maximum 255 characters
            'author' => 'required|max:255', // Author is required and maximum 255 characters
            'message' => 'required', // Message is required
        ]);

        // Create a new post instance with validated data
        $post = new Post([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);

        $post->save(); // Save the new post to the database

        return redirect()->route('posts.index')->with('success', 'Post created successfully.'); // Redirect back to the post listing after creating a post
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id); // Find a post by its ID

        if (!$post) {
            // Handle the case where the post is not found, e.g., redirect or show an error message.
            // For example:
            // return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        return view('posts.show', ['post' => $post]); // Assuming you have a 'show.blade.php' view for displaying a single post
    }

    // Add more methods for editing, updating, and deleting posts as needed.
}
