<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'message', 'date'];

    /**
     * Define the relationship with the Comment model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class); // Define a one-to-many relationship with the Comment model
    }

    /**
     * Get the count of comments for this post.
     *
     * @return int
     */
    public function commentCount()
    {
        return $this->comments()->count(); // Count the number of comments for this post
    }
}
