<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display home page with posts and their comment counts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve posts with comment counts
        $posts = Post::withCount('comments')->get();

        // Pass posts data to 'home' view
        return view('home', compact('posts'));
    }
}
