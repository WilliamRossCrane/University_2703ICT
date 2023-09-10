<!DOCTYPE html>
<html>
<head>
    <title>Task 2 - Social Media Application (Object-oriented Implementation)</title>
</head>
<body>
    <?php
    // Step 1: Autoload classes using composer (if not already done)
    require_once 'vendor/autoload.php';

    use wad\Post;

    // Step 2: Instantiate Post objects with user data
    $post1 = new Post('JohnDoe', 'user1.jpg', 'This is my first post!', '2023-07-27');
    $post2 = new Post('JaneSmith', 'user2.jpg', 'Hello, everyone!', '2023-07-26');
    $post3 = new Post('MikeJohnson', 'user3.jpg', 'Good morning!', '2023-07-25');

    // Step 3: Add comments to the posts
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