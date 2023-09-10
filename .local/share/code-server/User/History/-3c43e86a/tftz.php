<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Attributes are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'message', 'date'];

    /**
     * Relationship with the Comment model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class); // Define one-to-many relationship with comment model
    }

    /**
     * Count of comments for post.
     *
     * @return int
     */
    public function commentCount()
    {
        return $this->comments()->count(); // Count number of comments 
    }
}
