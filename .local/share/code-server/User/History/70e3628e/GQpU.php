<?php
namespace wad;

class Comment {
    // Properties to store comment information
    public $user;
    public $comment;

    // Constructor to initialize comment data
    public function __construct($user, $comment) {
        $this->user = $user;
        $this->comment = $comment;
    }

    // Getter functions to retrieve comment data
    public function getUser() {
        return $this->user;
    }

    public function getComment() {
        return $this->comment;
    }
}
?>
