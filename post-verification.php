<?php
    session_start();
      // Include the database connection file
    include_once("config.php");

    $title = $_POST["title"];
    $body = $_POST["body"];

    // title length is 50;
    // body length is 2000;

    if ($_POST["title"] == ""){
        $_SESSION["message"] .= " Title of post must be entered.";
    }
    else{
        $titleLength = strlen($title);

        if ($titleLength > 50){
            $_SESSION["message"] .= " Title of post must be less than 50 characters long (currently $titleLength).\n";
        }
    }

    if ($_POST["body"]  == ""){
        $_SESSION["message"] .= " Body of post must be entered.";
    }
    else{
        $bodyLength = strlen($body);

        if ($bodyLength > 2000){
            $_SESSION["message"] .= " Body of post must be less than 2000 characters long (currently $bodyLength).\n";
        }
    }

    if (isset($_SESSION["message"])){
        header("Location: post-page.php");
    }
    else{
        header("Location: index.php");
    }
?>