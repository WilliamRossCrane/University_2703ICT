<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function index()
    {
        $users = User::has('posts')->distinct()->get();
        return view('unique-users.index', compact('users'));
    }

    public function show(User $user)
    {
        $posts = $user->posts;
        return view('unique-users.show', compact('user', 'posts'));
    }
}
