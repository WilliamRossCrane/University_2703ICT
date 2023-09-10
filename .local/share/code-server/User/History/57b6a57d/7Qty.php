<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory; // Enable the usage of the Eloquent factory for this model

    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author', 'message'];

    /**
     * Relationship with the post model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class); // Define many-to-one (inverse) relationship with the post model
    }
}
