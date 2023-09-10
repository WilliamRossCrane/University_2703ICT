<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    // Method to store a new comment
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'author' => 'required|regex:/^[a-zA-Z\s]+$/',
            'message' => 'required|min:5',
        ]);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->author = $request->author;
        $comment->message = $request->message;
        $comment->save();

        return redirect()->route('posts.show', $post);
    }

    // Method to delete a comment
    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();
        return redirect()->route('posts.show', $post);
    }

    // Method to show edit form for a comment
    public function edit(Post $post, Comment $comment)
    {
        return view('comments.edit', compact('post', 'comment'));
    }

    // Method to update a comment
    public function update(Request $request, Post $post, Comment $comment)
    {
        $request->validate([
            'author' => 'required|regex:/^[a-zA-Z\s]+$/',
            'message' => 'required|min:5',
        ]);

        $comment->author = $request->author;
        $comment->message = $request->message;
        $comment->save();

        return redirect()->route('posts.show', $post);
    }

    // Method for replying to a comment
    public function reply(Request $request, Post $post, Comment $parentComment)
    {
        $request->validate([
            'author' => 'required|regex:/^[a-zA-Z\s]+$/',
            'message' => 'required|min:5',
        ]);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->parent_id = $parentComment->id;
        $comment->author = $request->author;
        $comment->message = $request->message;
        $comment->save();

        return redirect()->route('posts.show', $post);
    }

    // Method for liking a comment
    public function like(Post $post, Comment $comment)
    {
        // Implement the logic for liking a comment
        // You might need to create a pivot table for likes
    }

}
