<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a list of unique users who have authored at least one post.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve users who have at least one post
        $users = User::has('posts')->get();

        // Pass the users data to the 'unique-users.index' view
        return view('unique-users.index', compact('users'));
    }

    /**
     * Display the profile of a specific user, including their posts.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        // Retrieve the posts associated with the user
        $posts = $user->posts;

        // Pass the user and posts data to the 'unique-users.show' view
        return view('unique-users.show', compact('user', 'posts'));
    }

    // Other methods...
}
