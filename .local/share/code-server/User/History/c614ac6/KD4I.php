<?php

use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model
use App\Models\Post; // Import the Post model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users
        User::factory(10)->create();

        // Seed a Test User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed Posts using the original PostSeeder
        $this->call(PostSeeder::class);

        // Seed Posts using the AdditionalPostSeeder
        $this->call(AdditionalPostSeeder::class);
    }
}



