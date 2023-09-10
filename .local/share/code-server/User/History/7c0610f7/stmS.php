<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection; // Import the Collection class

class UserController extends Controller
{
    public function show(User $user)
    {
        // Retrieve the user's posts using the 'posts' relationship
        $posts = $user->posts ?? new Collection();

        return view('users.show', ['user' => $user, 'posts' => $posts]);
    }
}


