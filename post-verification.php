<?php
    sessionStart();
      // Include the database connection file
    include_once("config.php");
    include_once("databaseQueries.php");   
    post($pdo);
?>