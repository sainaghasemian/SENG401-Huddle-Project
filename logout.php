<?php
    databaseQueries::sessionStart();

    databaseQueries::resetAuthenticatedUsernameVariable();
    databaseQueries::resetLikedPostsVariable();
    
    header("Location: index.php");
?>