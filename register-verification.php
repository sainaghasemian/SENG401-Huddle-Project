<?php
    session_start();

    include_once("config.php");
    include_once("databaseQueries.php");   
    verifyRegistration($pdo);

?>