<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::select("select * FROM posts"); // Retrieve all posts from the 'posts' table
        return view('home')->with("items",$posts);
    }
}
