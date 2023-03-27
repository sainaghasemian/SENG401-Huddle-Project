<?php
    session_start();

    $_SESSION["authenticated_username"] = null;
    
    header("Location: index.php");
?>