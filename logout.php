<?php
    include_once("databaseQueries.php");
    sessionStart();
    resetAuthenticatedUsernameVariable();
    resetLikedPostsVariable();
    
    header("Location: index.php");
?>