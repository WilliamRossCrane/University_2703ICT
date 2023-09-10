<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostController extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'message', 'date'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function commentCount()
    {
        return $this->comments()->count();
    }

    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::withCount('comments')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'message' => 'required',
        ]);

        $post = new Post([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'message' => $request->input('message'),
        ]);

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'message' => 'required',
        ]);

        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        $post->title = $request->input('title');
        $post->message = $request->input('message');
        $post->save();

        return redirect()->route('posts.show', ['post' => $post])->with('success', 'Post updated successfully.');
    }

    // Add more methods for deleting posts and any other actions as needed.
}