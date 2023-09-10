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
}
?>
