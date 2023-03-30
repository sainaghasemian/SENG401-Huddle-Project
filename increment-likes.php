<?php
    databaseQueries::sessionStart();

    // Include the database connection file
    include_once("config.php");
    include_once("databaseQueries.php");   

    databaseQueries::incrementLikes($pdo);
?>