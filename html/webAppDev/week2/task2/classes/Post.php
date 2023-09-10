<?php
namespace wad;

class Post {
    // Properties to store post information
    public $user;
    public $image;
    public $message;
    public $date;
    public $comments = [];

    // Constructor to initialize post data
    public function __construct($user, $image, $message, $date) {
        $this->user = $user;
        $this->image = $image;
        $this->message = $message;
        $this->date = $date;
    }

    // Function to add comments to the post
    public function addComment($user, $comment) {
        $this->comments[] = ['user' => $user, 'comment' => $comment];
    }

    // Function to display the post and comments
    public function display() {
        echo "<div>";
        echo "<h3>{$this->user}</h3>";
        echo "<img src='{$this->image}' alt='User Image'>";
        echo "<p>{$this->message}</p>";
        echo "<p>Date: {$this->date}</p>";
        echo "<h4>Comments:</h4>";
        foreach ($this->comments as $comment) {
            echo "<p><strong>{$comment['user']}:</strong> {$comment['comment']}</p>";
        }
        echo "</div>";
    }
}
?>
