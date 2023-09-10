<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        // Retrieve the user's posts using the 'posts' relationship
        $posts = $user->posts;

        // Check if there are any posts
        if ($posts->isEmpty()) {
            // No posts available
            return view('users.show', ['user' => $user, 'posts' => null]);
        } else {
            // Render the view with posts
            return view('users.show', ['user' => $user, 'posts' => $posts]);
        }
    }
}

