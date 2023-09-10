<?php
namespace wad;

class Post {
    // Properties with type declarations
    public string $user;
    public string $image;
    public string $message;
    public string $date;
    public array $comments = [];

    // Constructor with type declarations for arguments
    public function __construct(string $user, string $image, string $message, string $date) {
        $this->user = $user;
        $this->image = $image;
        $this->message = $message;
        $this->date = $date;
    }

    // Function with type declarations for arguments
    public function addComment(string $user, string $comment): void {
        // Create a Comment object and add it to the $comments array
        $this->comments[] = new Comment($user, $comment);
    }

    // Function with type declaration for return value
    public function display(): void {
        echo "<div>";
        echo "<h3>{$this->user}</h3>";
        echo "<img src='{$this->image}' alt='User Image'>";
        echo "<p>{$this->message}</p>";
        echo "<p>Date: {$this->date}</p>";
        echo "<h4>Comments:</h4>";
        foreach ($this->comments as $comment) {
            // Retrieve comment data using getter functions from the Comment class
            echo "<p><strong>{$comment->getUser()}:</strong> {$comment->getComment()}</p>";
        }
        echo "</div>";
    }
}
?>
