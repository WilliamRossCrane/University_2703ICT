<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    // Method to store new comment for post
    public function store(Request $request, Post $post)
    {
        // Validate input data using laravel's validation rules
        $request->validate([
            'author' => 'required|max:255', 
            'message' => 'required', 
        ]);
        // Create new comment instance with validated data
        $comment = new Comment([
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);
        $post->comments()->save($comment); // Associate comment with the post
        return redirect()->route('posts.show', $post)->with('success', 'Comment added successfully.');
    }
    // Method edit a comment
    public function edit(Request $request, Post $post, Comment $comment)
    {
        // Validation 
        $request->validate([
            'author' => 'required|max:255', 
            'message' => 'required', 
        ]);
        // Update the comment with the edited data
        $comment->update([
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);
        return redirect()->route('posts.show', $post)->with('success', 'Comment updated successfully.');
    }
}
