<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Don't forget to import the User model

class UserController extends Controller
{
    // Method to display posts by a specific user
    public function show(User $user)
    {
        $posts = $user->posts; // Assuming you have a relationship defined between User and Post models

        return view('users.show', compact('user', 'posts'));
    }
}
