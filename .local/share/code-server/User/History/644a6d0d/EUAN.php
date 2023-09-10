<?php
namespace wad;

class Comment {
    public $user;
    public $comment;

    public function __construct($user, $comment) {
        $this->user = $user;
        $this->comment = $comment;
    }
}
?>