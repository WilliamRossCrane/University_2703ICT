<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * List of unique users who have authored one post.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve users who have one post
        $users = User::has('posts')->get();
        // Pass users data to 'unique-users.index' view
        return view('unique-users.index', compact('users'));
    }
    /**
     * Display profile of specific user, including posts.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        // Retrieve posts associated with user
        $posts = $user->posts;
        // Pass the user and posts data to the 'unique-users.show' view
        return view('unique-users.show', compact('user', 'posts'));
    }
}
