<?php
    session_start();

    $_SESSION["authenticated_username"] = null;
    $_SESSION['liked_posts'] = null;
    
    header("Location: index.php");
?>