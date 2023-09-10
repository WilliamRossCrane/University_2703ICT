<?php
namespace wad;

class Post {
    // Properties and existing methods remain unchanged...

    // Updated addComment() function
    public function addComment($user, $comment) {
        // Create a Comment object instead of an associative array
        $this->comments[] = new Comment($user, $comment);
    }

    // Existing methods remain unchanged...
}
?>
