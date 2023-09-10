<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class AdditionalPostSeeder extends Seeder
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

        // You can add more test posts if needed
        Post::create([
            'user_id' => 2,
            'title' => 'Another Test Post',
            'content' => 'This is another test post content.',
            'author' => 'Another Author',
        ]);
    }
}




