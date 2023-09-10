<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Assuming you have a user with an ID of 1 for the first post
        Post::create([
            'user_id' => 1,
            'title' => 'Test Post',
            'content' => 'This is a test post content.',
            'author' => 'Your Name',
        ]);
    }
}


