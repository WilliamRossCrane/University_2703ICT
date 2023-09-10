<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts; // Import the Post model

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts from the 'posts' table
        return view('home', ['posts' => $posts]);
    }
}
