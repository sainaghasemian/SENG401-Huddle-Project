<?php
    session_start();

    // Include the database connection file
    include_once("config.php");
    include_once("databaseQueries.php");   

    incrementLikes($pdo);
?>