<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Task 1 - Social Media Application (Array Implementation)</title>
</head>
<body>
    <?php
    // Step 2: Define associative array of posts
    $posts = [
        [
            'user' => 'JohnDoe',
            'image' => 'user1.jpg',
            'message' => 'This is my first post!',
            'date' => '2023-07-27',
        ],
        [
            'user' => 'JaneSmith',
            'image' => 'user2.jpg',
            'message' => 'Hello, everyone!',
            'date' => '2023-07-26',
        ],
        [
            'user' => 'MikeJohnson',
            'image' => 'user3.jpg',
            'message' => 'Good morning!',
            'date' => '2023-07-25',
        ],
    ];

    // Step 3: Iterate through the array to display posts
    foreach ($posts as $post) {
        echo "<div>";
        echo "<h3>{$post['user']}</h3>";
        echo "<img src='{$post['image']}' alt='User Image'>";
        echo "<p>{$post['message']}</p>";
        echo "<p>Date: {$post['date']}</p>";
        echo "</div>";
    }
    ?>
</body>
</html>