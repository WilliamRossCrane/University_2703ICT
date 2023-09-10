<!DOCTYPE html>
<html>
<head>
    <title>Task 4 - Social Media Application (Type Declarations)</title>
</head>
<body>
    <?php
    // Step 1: Include the class files manually
    require_once 'classes/Post.php';
    require_once 'classes/Comment.php';

    use wad\Post;

    // Step 2: Instantiate Post objects with user data
    $post1 = new Post('JohnDoe', 'user1.jpg', 'This is my first post!', '2023-07-27');
    $post2 = new Post('JaneSmith', 'user2.jpg', 'Hello, everyone!', '2023-07-26');
    $post3 = new Post('MikeJohnson', 'user3.jpg', 'Good morning!', '2023-07-25');

    // Step 3: Add comments to the posts using addComment() method
    $post1->addComment('Alice', 'Great post!');
    $post2->addComment('Bob', 'Hello, Jane!');
    $post2->addComment('Charlie', 'Nice to meet you, Jane!');

    // Step 4: Display posts and comments
    $post1->display();
    $post2->display();
    $post3->display();
    ?>
</body>
</html>
