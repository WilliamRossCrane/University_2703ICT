<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model

class HomeController extends Controller
{
    /**
     * Display the home page with posts and their comment counts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve posts with comment counts using Eloquent
        $posts = Post::withCount('comments')->get();

        // Pass the posts data to the 'home' view
        return view('home', compact('posts'));
    }
}
