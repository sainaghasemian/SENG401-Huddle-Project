<?php
    session_start();

    // Include the database connection file
    include_once("config.php");
    

    $post_id = $_POST['post_id'];

    // Update like count for post in database
    $pdo->query("UPDATE post SET NumberOfLikes = NumberOfLikes + 1 WHERE PostID = $post_id");

    // Redirect back to the page with the list of posts
    header("Location: index.php");
?>