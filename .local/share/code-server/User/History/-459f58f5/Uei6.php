<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve posts using Eloquent and load comments count
        $posts = Post::withCount('comments')->get();

        return view('home', compact('posts'));
    }
}
