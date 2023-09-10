<?php

namespace App\Http\Controllers; // Make sure to include the namespace

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller // Extend the Controller class
{
    // ...

    // Method to store a new comment for a post
    public function store(Request $request, Post $post)
    {
        // Validate input data using Laravel's validation rules
        $request->validate([
            'author' => 'required|max:255', // Author is required and maximum 255 characters
            'message' => 'required', // Message is required
        ]);

        // Create a new comment instance with validated data
        $comment = new Comment([
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);
        $post->comments()->save($comment); // Associate the comment with the post

        return redirect()->route('posts.show', $post)->with
