<?php
    

    // Include the database connection file
    include_once("config.php");
    include_once("databaseQueries.php");  
    sessionStart(); 
?>
<span class="error-message-pass"><span><?php echo $_SESSION["message"]?></span></span>
<?php
    subscribeUnsubscribe($pdo);
?>