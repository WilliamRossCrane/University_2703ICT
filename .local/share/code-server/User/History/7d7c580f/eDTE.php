<?php
namespace wad;

class Comment {
    // Properties with type declarations
    public string $user;
    public string $comment;

    // Constructor with type declarations for arguments
    public function __construct(string $user, string $comment) {
        $this->user = $user;
        $this->comment = $comment;
    }

    // Getter functions with return type declarations
    public function getUser(): string {
        return $this->user;
    }

    public function getComment(): string {
        return $this->comment;
    }
}
?>
