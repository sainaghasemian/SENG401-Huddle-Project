<?php
    databaseQueries::sessionStart();

    include_once("config.php");
    include_once("databaseQueries.php");   
    databaseQueries::verifyRegistration($pdo);

?>