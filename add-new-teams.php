<?php
    session_start();

    // Include the database connection file
    include_once("config.php");
    include_once("databaseQueries.php");   
?>
<span class="error-message-pass"><span><?php echo $_SESSION["message"]?></span></span>
<?php
    databaseQueries::subscribeUnsubscribe($pdo);
?>