<?php
    session_start();

    // Include the database connection file
    include_once("config.php");
    

    $post_id = $_POST['post_id'];

    if(isset($_SESSION['liked_posts']) && in_array($post_id, $_SESSION['liked_posts'])){
        header("Location: index.php");
        exit;
    }
    
    $pdo->query("UPDATE post SET NumberOfLikes = NumberOfLikes + 1 WHERE PostID = $post_id");
    
    if(isset($_SESSION['liked_posts'])){
        $_SESSION['liked_posts'][] = $post_id;
    } else {
        $_SESSION['liked_posts'] = array($post_id);
    }
    
    header("Location: index.php");
?>