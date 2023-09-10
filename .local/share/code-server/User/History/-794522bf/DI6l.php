<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Attributes are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',       // User's name
        'email',      // User's email address
        'password',   // User's password 
    ];

    /**
     * Attributes should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',          // Hide the password field
        'remember_token',    // Hide the remember_token field
    ];

    /**
     * Attributes should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',  // Email_verified_at at a datetime
    ];

    /**
     * Relationship with post model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);  // Define one-to-many relationship with the post model
    }
}