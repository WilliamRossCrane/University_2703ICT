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
        // Validation and store logic here

        return redirect()->route('posts.index'); // Redirect back to the post listing after creating a post
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


