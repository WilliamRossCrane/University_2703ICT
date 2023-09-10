<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Assuming you want to retrieve users who have at least one post
        $users = User::has('posts')->get();
        return view('unique-users.index', compact('users'));
    }

    public function show(User $user)
    {
        $posts = $user->posts;
        return view('unique-users.show', compact('user', 'posts'));
    }
}
