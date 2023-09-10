<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts
        return view('home', ['posts' => $posts]);
    }
}
