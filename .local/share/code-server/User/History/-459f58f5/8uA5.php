<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::select("select * FROM posts"); // Retrieve all posts from the 'posts' table
        return view('home', compact('posts'));
    }
}
