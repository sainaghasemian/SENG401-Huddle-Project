<?php
    sessionStart();

    resetAuthenticatedUsernameVariable();
    resetLikedPostsVariable();
    
    header("Location: index.php");
?>