<?php
    session_start();

    // Include the database connection file
    include_once("config.php");
    

    $post_id = $_POST['post_id'];

    if(isset($_SESSION['liked_posts']) && in_array($post_id, $_SESSION['liked_posts'])){
        // User has already liked this post, do not increment the like count again
        header("Location: index.php");
        exit;
    }
    
    // Update like count for post in database
    $pdo->query("UPDATE post SET NumberOfLikes = NumberOfLikes + 1 WHERE PostID = $post_id");
    
    // Add post ID to list of liked posts for this user
    if(isset($_SESSION['liked_posts'])){
        $_SESSION['liked_posts'][] = $post_id;
    } else {
        $_SESSION['liked_posts'] = array($post_id);
    }
    
    // Redirect back to the page with the list of posts
    header("Location: index.php");
?>